<?php
class Imsos_model extends CI_Model 
{
	function saverecords($data)
	{
		$this->db->insert('registration',$data);
	}
	function displayrecords()
	{
        $query=$this->db->get('registration');
        return $query->result();
	}
}
?>
