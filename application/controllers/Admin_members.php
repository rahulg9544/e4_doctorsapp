<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_members extends CI_Controller {

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
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_members_model');
	}
	public function index()
	{ 

		
     // if(isset($_SESSION['username']))
	    //   {	        
	      
	      // $a = array('content' => 'admin_members_view',
	                  
	      //           );
	      $this->load->view('admin_members_view');
	    //   }
	    // else
	    //   {
	    //     redirect('Admin_login/login_admin');
	    //   }
    }

    public function insertmemb()
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
      	$res1 = $this->Admin_members_model->getmailcount($mailid);

      	$mailcount=$res1->mailcount;
      	if($mailcount=='0')
      	{

      		$res123 = $this->Admin_members_model->insertmemb($data1);

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
         $res1 = $this->Admin_members_model->getmailcount($mailid);

      	$mailcount=$res1->mailcount;
      	if($mailcount=='0')
      	{
      		$res123 = $this->Admin_members_model->updatememb($data1,$reg_id);

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
      		$res2 = $this->Admin_members_model->getsamemail($mailid);

      		$existmailid = $res2->members_id;

      		if($existmailid==$reg_id)
      		{
               $res123 = $this->Admin_members_model->updatememb($data1,$reg_id);

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


    public function getregno()
    {
    	$res2 = $this->Admin_members_model->getlastid();

    	

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

    	$regno =  "KOA-".$tdate."-".$randm."-00".$id;

    	echo $regno;
    }

    public function getmembers()
    {

  	$res_mem['res'] = $this->Admin_members_model->get_members();
    

  	$this->load->view('display_members',$res_mem);
    }

    public function editmemb()
    {
       $id=$this->input->post('id');
      
      $res = $this->Admin_members_model->edit_membpart($id);
      echo json_encode($res);
    }

    public function delete_memb()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');

      

          
          
          $res = $this->Admin_members_model->delete_memb_part($id);
          
          $img_path = 'uploads/'.$image_name;

          unlink($img_path);  
             
          if($res == 1)
          {   
            echo "success";
          }else{
          
            echo "failed";
          }
    }

}    