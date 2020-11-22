<?php
class Imsos_controller extends CI_Controller
{
	public function __construct() { 
		parent::__construct(); 
		$this->load->helper('url');
		$this->load->model('Imsos_model');
    }
     public function savedata(){
     	$this->load->view('Imsos_view');
     	if($this->input->post('save'))
		{
		
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$middlename=$this->input->post('middlename');
		$specialty=$this->input->post('specialty');
		$highestqualification=$this->input->post('highestqualification'); 
		$department=$this->input->post('department');
		$institution=$this->input->post('institution');
		$email=$this->input->post('email');
		$street=$this->input->post('street');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$country=$this->input->post('country');
		$pin=$this->input->post('pin');
		$contact=$this->input->post('contact');
		$fax=$this->input->post('fax');
		$date=$this->input->post('date');

		$data = array(
        'firstname'=>$firstname,
        'lastname'=>$lastname,
        'middlename'=>$middlename,
        'specialty'=>$specialty,
        'highestqualification'=>$highestqualification,
        'department'=>$department,
        'institution'=>$institution,
        'email'=>$email,
        'street'=>$street,
        'city'=>$city,
        'state'=>$state,
        'country'=>$country,
        'pin'=>$pin,
        'contact'=>$contact,
        'fax'=>$fax,
        'date'=>$date );
		
		$this->Imsos_model->saverecords($data);		
		
		}
	}
	public function displayrec(){
		$this->Imsos_model->displayrecords();
		redirect('memberdetails_view');
	}
 }
 ?>