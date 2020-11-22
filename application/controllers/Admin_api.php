	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_api extends CI_Controller {

		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/welcome
		 *	- or -
		 * 		http://example.com/index.php/welcome/index
		 *	- or -
		 * Since this controller is set as the default controller in
		 * config/routes.php, it's displayed at http://example.com/
		 *
		 * So any other public methods not prefixed with an underscore will
		 * map to /index.php/welcome/<method_name>
		 * @see https://codeigniter.com/user_guide/general/urls.html
		
	    	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin_board extends CI_Controller {

		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/welcome
		 *	- or -
		 * 		http://example.com/index.php/welcome/index
		 *	- or -
		 * Since this controller is set as the default controller in
		 * config/routes.php, it's displayed at http://example.com/
		 *
		 * So any other public methods not prefixed with an underscore will
		 * map to /index.php/welcome/<method_name>
		 * @see https://codeigniter.com/user_guide/general/urls.html
		 */
		public function __construct()
	        {
	                parent::__construct();
	                // Your own constructor code
	                header('Content-type: text/json');
	                date_default_timezone_set('Asia/Kolkata');
	                $this->load->database();
	                $this->load->helper('url');
    				$this->load->helper('security');
    				$this->load->library('form_validation');
    				
	                $this->load->helper(array('form', 'url'));
	                $this->load->library('session');

	                $this->db->query("SET time_zone='+05:30'");
	                $this->load->model('Admin_api_model');

	        // if(_is_user_login($this)){
	        //      $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time;
	        //  }
	        //  else
	        //  {
	        //     redirect("Login");
	        //  }


	        }


		// function __construct()
		// {
	 //    	parent::__construct();
	 //    	$this->load->model('Admin_api_model');
		// }

	    public function fetch_email_id()
	    {  
	    	$mailid = $this->input->post('mailid');
	    	//print_r($mailid);exit();
			$query = $this->Admin_api_model->fetch_emailid($mailid);

	     	$data['data'] = array("success"=>"200", "Email_id"=> $query); 
	     	echo json_encode($data);
	       
	    }
	 
	    public function fetch_eventsCount()
	    {
	    	$resa=$this->Admin_api_model->fetch_count_event();
			$resb=$this->Admin_api_model->fetch_count_member();
			//$count=$resa->num1;

			$membercount=$resa->num1;
			$eventcount=$resb->num2;
			$result['data']=array('membercount'=>$membercount,
						'eventcount'=>$eventcount);
			echo json_encode($result);
	    }
	    	//**** About APIs ****\\

	    public function fetch_About()
	    	{
	    	
	    	$data['data'] = $this->Admin_api_model->fecthabout();

	    		echo json_encode($data);
	    	}
	    public function edit_About()
	    {
	    	$id=$this->input->post('id'); 

	    	$data = $this->Admin_api_model->about_Edit($id);
	    	echo json_encode($data);
	    }	

	    public function update_About()
	    {
	    	$page_id= $this->input->post('edit_id');
	    	$res123 = '';

			$data1 = array
	      (
	       //'about_id'=>$this->input->post('editnm'),
	       'about_title'=>$this->input->post('title'),
	       'about_description'=>$this->input->post('desc')
	       );

	      if ($page_id!='')
			{

	      	$res123 = $this->Admin_api_model->about_Update($page_id,$data1);

		    }
	      	

	      		if($res123==1)
	      		{
	      			;
	      			$data = array("success"=>"200", "About"=> "About updated");
	      			
	      		}
	      		else
	      		{
	      			$data = array("failed"=>"100", "About"=> "About not updated");
	      			
	      		}
	      			echo json_encode($data);
		}
			//****	Contacts APIs	****\\
		public function fetch_Contact()
		{

			$data['contacts'] = $this->Admin_api_model->fetch_contact();
			
			$data1['data'] = array("success"=>"200", "Fetch contact"=> $data);
			
			echo json_encode($data1);
		}

		public function edit_Contact()
	    {
	   		$id=$this->input->post('id');


	    	$data = $this->Admin_api_model->contact_Edit($id);
	    	$data1['data'] = array("success"=>"200", "Fetch contact"=> $data);
	    	echo json_encode($data1);
	    }

	    public function update_Contact()
	    {
	    	$page_id= $this->input->post('edit_id');

			$data1 = array
	      (
	       'contact_mail1'=>$this->input->post('mail1nm'),
	       'contact_mail2'=>$this->input->post('mail2nm'),
	       'contact_phone1'=>$this->input->post('phone1nm'),
	       'contact_phone2'=>$this->input->post('phone2nm'),
	       'contact_locationsrc'=>$this->input->post('locationnm'),
	       'contact_address'=>$this->input->post('addrnm')
	       );

	      if ($page_id!='')
			{
	      	$data = $this->Admin_api_model->contact_Update($page_id,$data1);
	      	//echo $res123;
	      	

	      		if($data==1)
	      		{
	      			$data2['data'] = array("success"=>"200", "Update_Contact"=> 'Contacts updated');
	      		}	
	      		else
	      		{
	      			$data2['data'] = array("failed"=>"100", "Update_Contact"=> 'Contacts not updated');
	      			
	      		}
	      		echo json_encode($data2);
		    }
		}

		public function delete_Contact()
		{

			$id = $this->input->post('id');

			$data = $this->Admin_api_model->contacts_Delete($id);

			if ($data == 1) {
				
				$data1['data'] = array("success"=>"200", "Contact"=> 'Contacts deleted');
				echo json_encode($data1);
			} 
			else {
				$data1['data'] = array("failed"=>"100", "Contact"=> 'Contacts not deleted');
				echo json_encode($data1);
			}
		}

		public function add_Contacts()
		{
			$did = $this->input->post('id');

			$data1 = array
	      (
	       'contact_mail1'=>$this->input->post('mail1nm'),
	       'contact_mail2'=>$this->input->post('mail2nm'),
	       'contact_phone1'=>$this->input->post('phone1nm'),
	       'contact_phone2'=>$this->input->post('phone2nm'),
	       'contact_locationsrc'=>$this->input->post('locationnm'),
	       'contact_address'=>$this->input->post('addrnm')
	       );

	      	if($did=='')
	        {
	        	$data = $this->Admin_api_model->insert_Contact($data1);
	        }

	        if ($data == 1) {
				
				$data1['data'] = array("success"=>"200", "Contact"=> 'Contacts added');
				echo json_encode($data1);
			} 
			else {
				$data1['data'] = array("failed"=>"100", "Contact"=> 'Contacts Not added');
				echo json_encode($data1);
				
			}
	      
		}
			//**** Events APIs  ****\\
		public function fetch_Event()
	    {
	  		$data['data'] = $this->Admin_api_model->get_Event();


			 echo json_encode($data);
	    }

	     public function edit_Event()
	    {
	   		$id=$this->input->post('id'); 

	    	$data = $this->Admin_api_model->event_Edit($id);

	    	echo json_encode($data);
	    }
	    
	    public function updateEvent()
	    {
	    	$page_id= $this->input->post('editnm');
	    	$fillimg = $this->input->post('img1nm');

	    	$config['upload_path']="./uploads";
	        $config['allowed_types']='jpeg|jpg|png';
	        $config['remove_spaces'] = TRUE;
	        $config['encrypt_name'] = TRUE;
	        $this->load->library('upload',$config);
	        $data = array('upload_data' => $this->upload->data());
	        $this->upload->initialize($config);

	        
	        if(!$this->upload->do_upload('imagenm'))
	        {
	        	$error = array('error'=> $this->upload->display_errors());
	        }

	        else
	        {
	        	$data = array('upload_data' => $this->upload->data());
	        }

	      	if ($_FILES['imagenm']['size'] == 0)
	      	{
	        	$filename = $fillimg;
	      	}
	      	else
	      	{
	        	if(!empty($reg_id)){
	          		$unlink_path = 'uploads/'.$fillimg;
	          		if(!empty($fillimg)){
	            		unlink($unlink_path);
	          		}         
	        	}
	        	$filename = $data['upload_data']['file_name'];
	      	}

			$data1 = array
	      (
	       //'about_id'=>$this->input->post('editnm'),
	       'event_title'=>$this->input->post('titlenm'),
	       'event_description'=>$this->input->post('descnm'),
	       'event_venue'=>$this->input->post('venuenm'),
	       'event_date'=>$this->input->post('datenm'),
	       'event_title'=>$this->input->post('titlenm'),
	       'event_image'=>$filename,
	       );

	      	if ($page_id=='')
			{
				$res123 = $this->Admin_api_model->insert_Event($data1);
			}
			else
			{
	      		$res123 = $this->Admin_api_model->update_Event($page_id,$data1);
	      		//echo $res123;
	      	}
	      	if($res123==1)
	      	{
	      		echo "success";
	      	}
	      	else
	      	{
	      		echo "failed";
	      	}
		}

		public function delete_Events()
	    {
	       $id = $this->input->post('id');
	       $image_name = $this->input->post('img');  
	       $res = $this->Admin_api_model->delete_Event($id);
	          
	        $img_path = 'uploads/'.$image_name;
	        
	        unlink($img_path);  
	             
	       if($res == 1)
	        {   
	          	echo "success";
	        }else{  
	            echo "failed";
	        }
	    }

	    public function fetch_regno()
	    {
	    	$res2 = $this->Admin_api_model->get_Lastid();

	    	

	    	if($res2=="0")
	    	{
	    		$id = 1;
	    	}
	    	else
	    	{
	    		$id=$res2+1;
	    	}

	    	$tdate = date('Ymd');

	    	$randm = rand(10,99);

	    	$regno['regno'] =  "KOA-".$tdate."-".$randm."-00".$id;
	    	

	    	echo json_encode($regno);
	    }
	    	//*** Members APIs ****\\

	    public function fetch_members()
		{ 
				$district = $this->input->post('district');
	     		$query = $this->db->query("select members_id,Name as name,Photo as photo,Hospital_Name as hospital_name,Present_Address_1 as present_address,Address_2 as address_2,Address_3 as address_3,District as district,State as state,Pin_Code as pin_code,Mob_no as mobile_no,WhatsApp_no as whatsapp_no,Email_id as email,Premenant_Address as premenant_address,DOB as date_of_brith,MBBS as qualification from members WHERE District='$district'");

	     		$data1 = $query->result();
	     		

	     			$data['data'] = array("success" => "200", "Members" => $data1);
	     			echo json_encode($data);
	     			     		
	    }

	    public function add_Member()
	    {
	    	$reg_id= $this->input->post('regid');
			$fillimg = $this->input->post('image1');


	    $mpaystat =$this->input->post('my-checkbox');
	    if($mpaystat=='')
	    {
	    $mpaystat="off";
	    }
	    

			$config['upload_path']="./uploads";
	        $config['allowed_types']='jpeg|jpg|png';
	        $config['remove_spaces'] = TRUE;
	        $config['encrypt_name'] = TRUE;
	        $this->load->library('upload',$config);
	        $data = array('upload_data' => $this->upload->data());
	        $this->upload->initialize($config);

	        
	        if(!$this->upload->do_upload('pimage'))

	        {
	        	$error = array('error'=> $this->upload->display_errors());
	        }

	        else
	        {

	        $data = array('upload_data' => $this->upload->data());

	        }

	     
	      if ($_FILES['pimage']['size'] == 0)
	      {
	          $filename = $fillimg;

	      }
	      else
	      {
	        if(!empty($reg_id)){
	          $unlink_path = 'uploads/'.$fillimg;
	          if(!empty($fillimg)){
	            unlink($unlink_path);
	          }         
	        }
	        $filename = $data['upload_data']['file_name'];
	      }
		
	     $mailid = $this->input->post('emaile');

		 $ins_date = date('Y-m-d');

	      $data1 = array
	      (
	       'IOA_LM_no'=>$this->input->post('ioalmno'),
	       'KOA_Reg_No'=>$this->input->post('regno'),
	       'Name'=>$this->input->post('name'),
	       'Photo'=>$filename,
	       'Hospital_Name'=>$this->input->post('hospname'),
	       'Present_Address_1'=>$this->input->post('presadrs'),
	       'Address_2'=>$this->input->post('adrs2'),
	       'Address_3'=>$this->input->post('adrs3'),
	       'District'=>$this->input->post('dist'),
	       'Pin_Code'=>$this->input->post('pincode'),
	       'State'=>$this->input->post('state'),
	       'District_Club'=>$this->input->post('distclb'),
	       'office_No'=>$this->input->post('officeno'),
	       'Residence_No'=>$this->input->post('resino'),
	       'Mob_no'=>$this->input->post('phon'),
	       'WhatsApp_no'=>$this->input->post('whatspno'),
	       'Email_id'=>$mailid,
	       'passowrd'=>$this->input->post('password'),
	       'pay_stat'=>$mpaystat,
	       'pay_id'=>$this->input->post('paymentid'),
	       'Premenant_Address'=>$this->input->post('permadrs'),
	       'DOB'=>$this->input->post('dob'),
	       'Blood_G'=>$this->input->post('bloodg'),
	       'MBBS'=>$this->input->post('mbbs'),
	       'PGDip'=>$this->input->post('pgdip'),
	       'PG_Degree'=>$this->input->post('pddgr'),
	       'Others'=>$this->input->post('othrs'),
	       'TCMC_Reg_no'=>$this->input->post('tcmc'),
	       'IMA_reg_no'=>$this->input->post('ima'),
	       'Sp_Int'=>$this->input->post('spint'),
	       'Award_Honors'=>$this->input->post('award'),
	       'spouse'=>$this->input->post('wifehus'),
	       'Child1'=>$this->input->post('child1'),
	       'Child2'=>$this->input->post('child2'),
	       'Child3'=>$this->input->post('child3'),
	       'Child4'=>$this->input->post('child4'),
	       'ins_date'=>$ins_date
	      );
	      


	      if($reg_id=='')
	      {
	      	$res1 = $this->Admin_api_model->getmailcount($mailid);

	      	$mailcount=$res1->mailcount;
	      	if($mailcount=='0')
	      	{

	      		$res123 = $this->Admin_api_model->insert_Member($data1);

	      		if($res123==1)
	      		{
	      			echo "success";
	      		}
	      		else
	      		{
	      			echo "failed";
	      		}
	      	}
	      	else
	      	{
	      		echo "mailexist";
	      	}

	      }
	      else
	      { 
	         $res1 = $this->Admin_api_model->getmailcount($mailid);

	      		$mailcount=$res1->mailcount;

	      	if($mailcount=='0')
	      	{
	      		$res123 = $this->Admin_api_model->update_Member($data1,$reg_id);

	      		if($res123==1)
	      		{
	      			echo "success";
	      		}
	      		else
	      		{
	      			echo "failed";
	      		}

	      	}
	      	else
	      	{
	      		$res2 = $this->Admin_api_model->getsam_Email($mailid);

	      		$existmailid = $res2->members_id;

	      		if($existmailid==$reg_id)
	      		{
	               $res123 = $this->Admin_api_model->update_Member($data1,$reg_id);

		      		if($res123==1)
		      		{
		      			echo "success";
		      		}
		      		else
		      		{
		      			echo "failed";
		      		}
	      		}
	      		else
	      		{
	      			echo "mailexist";
	      		}
	      	}
	      }	

	    }

	    public function edit_Member()
	    {
	       $id=$this->input->post('id');
	      
	      $data = $this->Admin_api_model->edit_Membpart($id);
	      echo json_encode($data);
	    }

	    public function delete_Member()
	    {
	       $id = $this->input->post('id');
	       $image_name = $this->input->post('img');
	          
	          $res = $this->Admin_api_model->delete_Membpart($id);
	          
	          $img_path = 'uploads/'.$image_name;

	          unlink($img_path);  
	             
	          if($res == 1)
	          {   
	            echo "success";
	          }else{
	          
	            echo "failed";
	          }
	    }

	     //**** descussion ****\\

	    public function insert_Desc()
	    {
	    	$did = $this->input->post('descid');
	        $ins_id=date('Y-m-d H:i:s');

	        $data1=array(

	        	'discussion_name'=>$this->input->post('descname'),
	        	'discussion_topic'=>$this->input->post('desctopic'),
	        	'discussion_by'=>'admin',
	        	'discussion_status'=>'1',
	        	'discussion_datetime'=>$ins_id
	        ); 


	        if($did=='')
	        {
	        	$res123 = $this->Admin_api_model->insert_Desctop($data1);
	        }
	        else
	        {
	        	$res123 = $this->Admin_api_model->update_Desctop($data1,$did);
	        }   

	        if($res123==1)
	        {
	        	echo "success";
	        }
	        else
	        {
	        	echo "failed";
	        }
	    }

	    public function fetch_Desc()
	    {

	  	$data['data'] = $this->Admin_api_model->get_Descs();
	    

	  	echo json_encode($data);
	    }

	    public function change_Status()
	    {
	    	$stat = $this->input->post('status');
			$id = $this->input->post('id');

			if($stat ==1)
			{
				$newstat =array('discussion_status'=>2);
				$res = $this->Admin_api_model->change_Stat($id,$newstat);

				if ($res==1) 
				{
					echo "true";
				}
				else
				{
					echo "false";
				}
			}
			else
			{
				$newstat =array('discussion_status'=>1);
				$res = $this->Admin_api_model->change_Stat($id,$newstat);
				
				if ($res==1) 
				{
					echo "true";
				}
				else
				{
					echo "false";
				}
			}
	    }

	     public function edit_Desc()
	    {
	    	$id=$this->input->post('id');
			 	
			 	$res = $this->Admin_api_model->edit_Topicpart($id);
				echo json_encode($res);
	    }

	    public function delete_Desc()
	    {
	    	$id = $this->input->post('id');
	    	
	    	if (empty($id)) { 

	    		$disc_id = 'NULL';

	    	} else
	    	 {
	    	 	$disc_id = $id;
	    	}
	    	
	    	$data = "DELETE FROM discussion WHERE discussion_id = $disc_id ";
	    	
	    	$res = $query = $this->db->query($data);
	   
	    	if($res==1)
	    	{
	    		echo "success";
	    	}
	    	else
	    	{
	    		echo "failed";
	    	}	
	    }

	 //    public function login()
		// {
		//    $this->load->model('Admin_api_model');
		//    $this->load->library('session');	
		//    $result = $this->Admin_api_model->validate_login();

		//    if(!$result)
		//    {
		//    $data = array("failed"=>"100", "data"=> 'Login failed');
	 //      	echo json_encode($data);
		//    }
		//    else
		//    {
		// 	$data = array("success"=>"200", "data"=> 'Login');
		// 	echo json_encode($data);
		//    }
		// }

		/* user login json */
	     
	public function login()
	{ 
	    $data = array(); 
	    $_POST = $_REQUEST;      
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('user_email', 'Email Id',  'trim|required');
	    $this->form_validation->set_rules('password', 'Password', 'trim|required');

	    if ($this->form_validation->run() == FALSE) 
	    {
	      $data["responce"] = false;  
	      $data["error"] =  strip_tags($this->form_validation->error_string());

	    }else
	    {
	                     //users.user_email='".$this->input->post('user_email')."' or
	     $q = $this->db->query("Select * from registers where(user_email='".$this->input->post('user_email')."' ) and user_password='".md5($this->input->post('password'))."' Limit 1");


	     if ($q->num_rows() > 0)
	     {
	      $row = $q->row(); 
	      if($row->status == "0")
	      {
	        $data["responce"] = false;  
	        $data["error"] = 'Your account currently inactive.Please Contact Admin';

	      }

	      else
	      {
	        $data["responce"] = true;  
	        $data["data"] = array("user_id"=>$row->user_id,"user_fullname"=>$row->user_fullname,
	          "user_email"=>$row->user_email,"user_phone"=>$row->user_phone,"user_image"=>$row->user_image) ;

	      }
	    }
	    else
	    {
	      $data["responce"] = false;  
	      $data["error"] = 'Invalide Username or Passwords';
	    }


	  }
	  echo json_encode($data);

	}

	public function forgot_password(){
	            $data = array();

	            $this->load->library('form_validation');
	            $this->load->library('session');
	            $this->form_validation->set_rules('email', 'Email', 'trim|required');
	            if ($this->form_validation->run() == FALSE) 
	        {
	                  $data["responce"] = false;  
	               $data["error"] = 'Warning! : '.strip_tags($this->form_validation->error_string());
	                        
	        }else
	            {
	                   $request = $this->db->query("Select * from registers where user_email = '".$this->input->post("email")."' limit 1");
	                   if($request->num_rows() > 0){
	                                
	                                $user = $request->row();
	                                $token = uniqid(uniqid());
	                                $this->db->update("registers",array("varified_token"=>$token),array("user_id"=>$user->user_id)); 
	                                $this->load->library('email');
	                               // $this->email->from($this->config->item('default_email'), $this->config->item('email_host'));
	                                
	                                $email = $user->user_email;
	                                 $name = $user->user_fullname;
	                                 $return = $this->send_email_verified_mail($email,$token,$name);
	                                
	                                 
	                               
	                                if (!$return){
	                                                  $data["responce"] = false;  
	                                                  $data["error"] = 'Warning! : Something is wrong with system to send mail.';
	    
	                                }else{
	                                                  $data["responce"] = true;  
	                                                  $data["error"] = 'Success! : Recovery mail sent to your email address please verify link.';
	    
	                                }
	                   }else{
	                                             $data["responce"] = false;  
	                                             $data["error"] = 'Warning! : No user found with this email.';
	    
	                   }
	                }
	                echo json_encode($data);
	        }
	        
	        
    public function send_email_verified_mail($email,$token,$name){
      //$message = $this->load->view('emails/email_verify',array("name"=>$name,"active_link"=>site_url("users/verify_email?email=".$email."&token=".$token)),TRUE);
      
       
                
                        $this->email->from("jishnukb000@gmail.com","Docotors app");
                        $list = array($email);
                        $this->email->to($list); 
                         $this->email->reply_to("jishnukb000@gmail.com","Docotors app");
                        $this->email->subject('Forgot password request');
                        $this->email->message("Hi ".$name." \n Your password forgot request is accepted plase visit following link to change your password. \n
                            ".site_url("users/modify_password/".$token)."
                            ");
                       return $this->email->send();
                  
	}

/* user registration */               
	public function signup(){ 
	       $data = array(); 
	            $_POST = $_REQUEST;      
	                $this->load->library('form_validation');
	                /* add registers table validation */
	                $this->form_validation->set_rules('user_name', 'Full Name', 'trim|required');
	                $this->form_validation->set_rules('user_mobile', 'Mobile Number', 'trim|required|is_unique[registers.user_phone]');
	                $this->form_validation->set_rules('user_email', 'User Email', 'trim|required|is_unique[registers.user_email]');
	                $this->form_validation->set_rules('password', 'Password', 'trim|required');
	               
	                $config['upload_path']="./uploads";
			        $config['allowed_types']='jpeg|jpg|png';
			        $config['remove_spaces'] = TRUE;
			        $config['encrypt_name'] = TRUE;
			                 $this->load->library('upload',$config);
			        $data1 = array('upload_data' => $this->upload->data());
			        $this->upload->initialize($config);

	        
	        if(!$this->upload->do_upload('user_image'))
	        {
	        	$error = array('error'=> $this->upload->display_errors());
	        }

	        else
	        {
	        	$data1 = array('upload_data' => $this->upload->data());
	        }

	      	if ($_FILES['user_image']['size'] == 0)
	      	{
	        	$filename = $fillimg;
	      	}
	      	else
	      	{
	        	if(!empty($reg_id)){
	          		$unlink_path = 'uploads/'.$fillimg;
	          		if(!empty($fillimg)){
	            		unlink($unlink_path);
	          		}         
	        	}
	        	$filename = $data1['upload_data']['file_name'];
	      	}
	                
	                
	                if ($this->form_validation->run() == FALSE) 
	        		{
	        		    $data["responce"] = false;  
	        			$data["error"] = strip_tags($this->form_validation->error_string());
	                    
	                    
	        		}else
	                {
	                     
	                    $this->db->insert("registers", array("user_phone"=>$this->input->post("user_mobile"),
	                                            "user_fullname"=>$this->input->post("user_name"),
	                                             "user_email"=>$this->input->post("user_email"),
	                                             "user_password"=>md5($this->input->post("password")), 
	                                            "status" => 1,
	                                            'user_image'=>$filename
	                                            ));
	                    $user_id =  $this->db->insert_id();  
	                    $data["responce"] = true; 
	                    $data["message"] = "User Register Sucessfully..";
	                    
	                  }                  
	           
	                     echo json_encode($data);
	} 

	public function listslider()
	   	{
	            
	           $data["active"] = "listslider";
	           $query = $this->db->query("Select * from slider");
	           $result = $query->result();
	           $data["allslider"] = $result;
	           $data1 = array("success"=>"200", "listslider "=> $data);
	          
	            echo json_encode($data1);
	       
	    }

	  //   public function password()
	  //   {
	  //   	$email = $this->input->post('email');

	  //   	$query = $this->db->query("SELECT * FROM `registers` WHERE `user_email` = '$email'");
			// $row = $query->result();
			// foreach ($row as $res) {
			// 	$pass_word = $res->user_password;
			// 	$name = $res->user_fullname;
			// 	//$l_name = $res1['l_name'];
			// 	$mail = $res->user_email;
			// }
			// if($res)
			// {	
			// 	$password = $pass_word;
			// 	$f_name =$name;
			// 	$email = $mail;
			// 	$content = "
			// 	<html>
			// 	<head>
			// 	</head>
			// 	<body>
			// 	<center><h2><b>Forgot Password Mail</b></h2></center><br><p>Dear ".$f_name.", <br>
			// 	You Have received this mail because you have registered with us and you have clicked the forgot   password option:-<br>
			// 	Account Details with abc are:- <br>
			// 	User Email:-  <b>".$email."</b><br>
			// 	Password:- <b>".$password."</b><br>
			// 	Use the above credentials for future use.<br>
			// 	Team ABC</p>";
			// 	$content2 = "</body>
			// 	</html>";
			// 	$body = $content.$content2;
			// 	$from ='jishnukb000@gmail.com';
			// 	$subject = "Forgot Password mail for ".$email."";
			// 	$server=$_SERVER['HTTP_HOST'];
			// 	$headers = "From: ABC<".$from. ">\r\nContent-type: text/html; charset=iso-8859-1\r\nMIME-        Version: 1.0\r\n";
			// 	$to = $email;
			// 	$send_email = mail($to, $subject, $body, $headers);
			// 	$b= "Password containing mail sent..";
			// 	echo json_encode($b);
			// }
			// else
			// {
			// 	$b= "User Record Not Found For this email..";
			// 	echo json_encode($b);
			// }
	  //   } 
			  
}  