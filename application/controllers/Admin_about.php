<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_about extends CI_Controller {

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
    	$this->load->model('Admin_about_model');
	}
	public function index()
	{ 
		$this->load->view('admin_about_view');
	}
	public function getAbout()
    {
  		$res_mem['res'] = $this->Admin_about_model->get_about();
		$this->load->view('display_about',$res_mem);
    }
    public function editAbout()
    {
   		$id=$this->input->post('id');   
    	$res = $this->Admin_about_model->edit_about($id);
    	echo json_encode($res);
    }
    public function updateAbout()
    {
    	$page_id= $this->input->post('editnm');

		$data1 = array
      (
       //'about_id'=>$this->input->post('editnm'),
       'about_title'=>$this->input->post('titlenm'),
       'about_description'=>$this->input->post('descnm')
       );

      if ($page_id!='')
		{
      	$res123 = $this->Admin_about_model->update_about($page_id,$data1);
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