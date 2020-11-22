<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
use \Firebase\JWT\JWT;  

class Auth extends CI_Controller {  
      
    public function __construct() { 

        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        
        // Load the user model
        $this->load->model('api/user_model','user_model');
        $this->load->model('api/m_main','M_main');
    }


    public function login_post() {

        $u = $this->post('username'); //Username Posted
        $p = base64_encode($this->post('password')); //Pasword Posted
        $q = array('user_email' => $u); //For where query condition
        $kunci = $this->config->item('thekey');
        $invalidLogin = ['status' => 'Invalid Login']; //Respon if login invalid
        $val = $this->M_main->get_user($q)->row(); //Model to get single data row from database base on username

        // print_r($val);
        // exit;

        if($this->M_main->get_user($q)->num_rows() == 0)
        {
            $this->response($invalidLogin, REST_Controller::HTTP_NOT_FOUND);
        }
        $match = $val->user_password;   //Get password for user from database
        

        if($p == $match){ 

            // echo "hello";
            // exit;
            
            //Condition if password matched
            $token['id'] = $val->user_id;  //From here
            $token['username'] = $u;
            $date = new DateTime();
            $token['iat'] = $date->getTimestamp();
      //      $token['exp'] = $date->getTimestamp() + 60*60*5; //To here is to generate token
            $output['token'] = JWT::encode($token,$kunci ); //This is the output token

            $userlogindata = array(
                'username' => $val->user_fullname,
                'usermail'  => $val->user_email,
                'usermobile' => $val->user_phone,
             );


         //   $this->set_response($output, REST_Controller::HTTP_OK); //This is the respon if success

            $this->response(['message' => 'User login successful.',
            'token' => $output['token'],
            'data' => $userlogindata
        ],

            REST_Controller::HTTP_OK);

        }
        else {
            $this->set_response($invalidLogin, REST_Controller::HTTP_NOT_FOUND); //This is the respon if failed
        }
       
    }

    public function sendcode_post()
    {
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $mobile = $this->input->post('mobile');
        $umailid = $this->input->post('mailid');

        $getsameusercount = $this->user_model->getsameusercount($umailid);

        if($getsameusercount==0)
        {

           $datapas = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
           $pass = substr(str_shuffle($datapas), 0, 8);

           $userpassword=base64_encode($pass);

           $insdate = date('Y-m-d');

           $data=array
           (
            'user_fname'=>$fname,
            'user_lname'=>$lname,
            'user_mobile'=>$mobile,   
            'user_mail'=>$umailid,
            'verification_code'=>$userpassword,
            'user_status'=>1,
            'verify_status'=>'0',
            'user_date'=>$insdate
           );

          $res = $this->user_model->insertuser($data);

          if($res==1)
          {
            

            $data2['test']=array
            (
              'fname'=>$fname,
              'verification_code'=>$userpassword,
              'tomail'=>$umailid,
              'name'=>'User'
            ); 

            $res=array
            (
              'fname'=>$fname,
              'lname'=>$lname,
              'mobile'=>$mobile,
              'umailid'=>$umailid
            ); 

                    require 'PHPMailer-master/src/Exception.php';
                    require 'PHPMailer-master/src/PHPMailer.php';
                    require 'PHPMailer-master/src/SMTP.php';
                    
                    // $mail = new PHPMailer();
                    $mail=new PHPMailer\PHPMailer\PHPMailer();
                 //   $mail->IsSMTP();
                    
                    $mail->SMTPDebug  = 4;  
                    $mail->SMTPAuth   = TRUE;
                    $mail->SMTPSecure = "tls";
                    $mail->Port       = 25;
                    $mail->Host       = "localhost";
                    $mail->Username   = "infotootq8@gmail.com";

                    $mail->Password   = "toot@123";
                    
                    $mail->IsHTML(true);
                    $mail->AddAddress($umailid, "User");
                    $mail->SetFrom("infotootq8@gmail.com", "tootq8");
                    $mail->AddReplyTo("infotootq8@gmail.com", "tootq8");
                    //   $mail->AddCC("cc-recipient-email", "cc-recipient-name");
                    $mail->Subject = "KOA APP Registration confirmation";
                    $content = $this->load->view('register_mail_view',$data2,true);

                    
                    $mail->MsgHTML($content); 
                    if(!$mail->Send()) {
                        
                        // echo 'Mailer error: ' . $mail->ErrorInfo;
                        
                        // exit;
                        $this->response([
                            'message' => 'Failed'
                        ], REST_Controller::HTTP_BAD_REQUEST);
                   
                   // var_dump($mail);
                    } else {

                        $this->response([
                            'message' => 'Success',
                            'data' => $res
                        ], REST_Controller::HTTP_OK);
                    
                    }


          }
          else
          {
            $this->response([
                'message' => 'Failed'
            ], REST_Controller::HTTP_BAD_REQUEST);
          }
        }
        else
        {
            $this->response([
                'message' => 'User exists'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }

    }


    public function registeruser_post()
    {
    
        $umailid = $this->input->post('mailid');
        $reg_id = $this->input->post('reg_id');
        $createpass = $this->input->post('createpass');
        $confirmpass = $this->input->post('confirmpass');


        if (($umailid || $reg_id || $createpass || $confirmpass) == ""){
            $this->response([
                'message' => 'Please fill all fields'
            ], REST_Controller::HTTP_BAD_REQUEST);
            exit;
        }
        else if(!filter_var($umailid, FILTER_VALIDATE_EMAIL)){
            $this->response([
                'message' => 'Invalid email format'
            ], REST_Controller::HTTP_BAD_REQUEST);
            exit;
        }

        $getsameusercount = $this->user_model->getuserrow($umailid);


        if($getsameusercount -> user_mail == $umailid && $getsameusercount -> verify_status != 0){
            $this->response([
                'message' => 'User already exists'
            ], REST_Controller::HTTP_BAD_REQUEST);
            exit;
        }


        $getuserrow = $this->user_model->getuserrow($umailid);
        

        // print_r($getuserrow);
        // exit;

        if($getuserrow -> verification_code != $vcode){
            $this->response([
                'message' => 'Verification code incorrect'
            ], REST_Controller::HTTP_BAD_REQUEST);
            exit;
        }

        if($createpass != $confirmpass){
            $this->response([
                'message' => 'Confirm password incorrect'
            ], REST_Controller::HTTP_BAD_REQUEST);
            exit;
        }

        else {

            $upddate = date('Y-m-d');

            $data=array
           (
               'user_password'=>base64_encode($confirmpass),
               'verify_status'=>'1',
               'user_date'=>$upddate
           );
            $res = $this->user_model->update_user($data,$umailid);

            if ($res ==1){
                $this->response([
                    'message' => 'Success',
                ], REST_Controller::HTTP_OK);
            }
            else{
                $this->response([
                    'message' => 'failed'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
       

    }

    public function logoutuser_get()
    {
        unset(
            $_SESSION['userdisplay'],
            $_SESSION['cusername'],
            $_SESSION['userid'],
            $_SESSION['userlogged_in']
           );
           $this->response([
            'message' => 'Success',
        ], REST_Controller::HTTP_OK);
    }



    public function profile(){

    	$user_id = $this->input('member_id');

    	$query = $this->db->query("select members_id,Name as name,Photo as photo,Hospital_Name as INSTITUTION,MBBS & ", " & PGDip AS HIGHEST QUALIFICATIONS,Email_id as EMAIL,Mob_no as CONTACT_NO from members where member_id = '$user_id' ");

    		$data1 = $query->result();
	     		
	     			$data['data'] = array("success" => "200", "Personal Details" => $data1);
	     			echo json_encode($data);

    }

    public function fetch_members()
		{ 
				$district = $this->input->post('district');
	     		$query = $this->db->query("select members_id,Name as name,Photo as photo,Hospital_Name as hospital_name,MBBS & ", " & PGDip AS Highest_qualification  from members WHERE District='$district'");

	     		$data1 = $query->result();
	     		

	     			$data['data'] = array("success" => "200", "Members List" => $data1);
	     			echo json_encode($data);
	     			     		
	    }

				//**** Events APIs  ****\\
	public function fetch_Event()
    {
    	$query = $this->db->query('select * from event');
    	$result = $query->result();

  		$data['data'] = array("success" => "200", "Events History" => $result);
		
		echo json_encode($data);
    }

    public function upcoming_event()
    {
    	$date = date('Y-m-d');

    	$query = $this->db->query(" select event_image,event_title,event_description,event_venue,event_date from event where event_date >= '$date' ");
    	$result = $query->result();

  		$data['data'] = array("success" => "200", " Upcoming Events " => $result);
		
		echo json_encode($data);
    }
    public function discussions()
    {
    	$query = $this->db->query("select discussion_topic,discussion_datetime from discussion ");
    	$result = $query->result();

  		$data['data'] = array("success" => "200", " Topic List " => $result);
		
		echo json_encode($data);
    }

    public function discussion_topic()
    {
    	$discussion_id = $this->input->post('discussion_id');
    	$query = $this->db->query("select discussion_by,discussion_name from discussion where discussion_id = '$discussion_id' ");
    	$result = $query->result();

  		$data['data'] = array("success" => "200", " Discussion Topic" => $result);
		
		echo json_encode($data);
    }

    public function about()
    {
    	$query = $this->db->query("select about_title,about_description from about ");
    	$result = $query->result();

  		$data['data'] = array("success" => "200", " About Us " => $result);
		
		echo json_encode($data);
    }

    public function contacts()
    {
    	$query = $this->db->query("select * from contact ");
    	$result = $query->result();

  		$data['data'] = array("success" => "200", " Contacts Us " => $result);
		
		echo json_encode($data);
    }

    public function Registeration()
    {

    	$reg_id = $this->input->post('reg_id');
    	$username = $this->input->post('username');
    	$password = $this->input->post('password');
    }
}  
?>