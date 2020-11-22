<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends CI_Controller {

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
    	$this->load->model('Admin_contact_model');
	}
	public function index()
	{ 
		$this->load->view('admin_contact_view');
	}
	public function getContact()
    {
  		$res_mem['res'] = $this->Admin_contact_model->get_contact();
		$this->load->view('display_contact',$res_mem);
    }
    public function editContact()
    {
   		$id=$this->input->post('id');   
    	$res = $this->Admin_contact_model->edit_contact($id);
    	echo json_encode($res);
    }
    public function updateContact()
    {
    	$page_id= $this->input->post('editnm');

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
      	$res123 = $this->Admin_contact_model->update_contact($page_id,$data1);
      	//echo $res123;
      	

      		if($res123==1)
      		{
      			echo "success";
      		}
      		else
      		{
      			echo "failed";
      		}
	    }
	}
}
?>