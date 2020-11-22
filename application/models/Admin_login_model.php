<?php
class Admin_login_model extends CI_Model 
{
  function validate_login()
  {
  		 $username = $this->security->xss_clean($this->input->post('inputUsername'));
        $password = $this->security->xss_clean($this->input->post('inputPassword'));

        
        

        if($username=='koaadmin'&&$password='koa123')
        {
        	

        	$data = array(
                'id'=>'0',
                'username'=>$username,
                'type'=>'admin',
                'validate'=>true
        	);

        	$this->session->set_userdata($data);

        	return true;

        }
        else
        {
        	return false;
        }	

	}
  
}	