<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	function __construct()
	 {
    	parent::__construct();
    	$this->load->model('Admin_home_model');
	}
	public function index()
	{ 
		$this->load->view('admin_dashboard_view');
	}
	public function geteventCount()
	{
		$resa=$this->Admin_home_model->get_count_event();
		$resb=$this->Admin_home_model->get_count_member();
		//$count=$resa->num1;

		$membercount=$resa->num1;
		$eventcount=$resb->num2;
		$result=array('membercount'=>$membercount,
					'eventcount'=>$eventcount);
		echo json_encode($result);
	}
} 