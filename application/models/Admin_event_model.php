<?php
class Admin_event_model extends CI_Model 
{
	function get_event(){
		$query =$this->db->get('event');
		return $query->result();
	}
	function edit_event($id)
	{
		$this->db->where('event_id',$id);
		$query = $this->db->get('event');
		return $query->row();
	}
	function update_event($page_id,$data1)
	{
		$this->db->where('event_id',$page_id);
		$query = $this->db->update('event',$data1);
		return $query;
	}
	function delete_event($id)
	{
		$this->db->where('event_id',$id);
		$query = $this->db->delete('event');
		return $query;
	}
	function insert_event($data1)
   	{
   		$query = $this->db->insert('event',$data1);
   		return $query;
   	}
}