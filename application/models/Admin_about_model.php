<?php
class Admin_about_model extends CI_Model 
{
	function get_about(){
		$query =$this->db->get('about');
		return $query->result();
	}
	function edit_about($id)
	{
		$this->db->where('about_id',$id);
		$query = $this->db->get('about');
		return $query->row();
	}
	function update_about($page_id,$data1)
	{
		$this->db->where('about_id',$page_id);
		$query = $this->db->update('about',$data1);
		return $query;
	}
}