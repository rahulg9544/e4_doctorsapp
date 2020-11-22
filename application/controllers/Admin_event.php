<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_event extends CI_Controller {

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
    	$this->load->model('Admin_event_model');
	}
	public function index()
	{ 
		$this->load->view('admin_event_view');
	}
	public function getEvent()
    {
  		$res_mem['res'] = $this->Admin_event_model->get_event();
		$this->load->view('display_event',$res_mem);
    }
    public function editEvent()
    {
   		$id=$this->input->post('id');   
    	$res = $this->Admin_event_model->edit_event($id);
    	echo json_encode($res);
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
			$res123 = $this->Admin_event_model->insert_event($data1);
		}
		else
		{
      		$res123 = $this->Admin_event_model->update_event($page_id,$data1);
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
	

	public function deleteEvent()
    {
       $id = $this->input->post('id');
       $image_name = $this->input->post('img');  
       $res = $this->Admin_event_model->delete_event($id);
          
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
?>