<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_descussion extends CI_Controller {

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
    	$this->load->model('Admin_descussion_model');
	}
	public function index()
	{ 

		
     if(isset($_SESSION['username']))
	      {	        
	      
	      // $a = array('content' => 'admin_members_view',
	                  
	      //           );
	      $this->load->view('admin_descussion_view');
	      }
	    else
	      {
	        redirect('Admin_login/login_admin');
	      }
    }


    public function insertdesc()
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
        	$res123 = $this->Admin_descussion_model->insertdesctop($data1);
        }
        else
        {
        	$res123 = $this->Admin_descussion_model->updatedesctop($data1,$did);
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

    public function gettop()
    {

  	$res_top['res'] = $this->Admin_descussion_model->get_descs();
    

  	$this->load->view('display_discussion',$res_top);
    }

    public function change_stat()
    {
    	$stat = $this->input->post('status');
		$id = $this->input->post('id');

		if($stat ==1)
		{
			$newstat =array('discussion_status'=>2);
			$res = $this->Admin_descussion_model->changestat($id,$newstat);

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
			$res = $this->Admin_descussion_model->changestat($id,$newstat);

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

    public function editdesc()
    {
    	$id=$this->input->post('id');
		 	
		 	$res = $this->Admin_descussion_model->edit_topic_part($id);
			echo json_encode($res);
    }

    public function delete_disc()
    {
    	$id = $this->input->post('id');

    	$res = $this->Admin_descussion_model->deletedisc($id);

    	if($res==1)
    	{
    		echo "success";
    	}
    	else
    	{
    		echo "failed";
    	}	

    }

}    