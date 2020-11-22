<?php
class Admin_home_model extends CI_Model 
{
	function get_count_event(){
		$sqlquery ="SELECT COUNT(*) AS num1 FROM event";
		$query = $this->db->query($sqlquery);
		return $query->row();
	}
	function get_count_member(){
		$sqlquery ="SELECT COUNT(*) AS num2 FROM members";
		$query = $this->db->query($sqlquery);
		return $query->row();
	}
}
?>