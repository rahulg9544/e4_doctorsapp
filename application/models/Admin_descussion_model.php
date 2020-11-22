<?php
class Admin_descussion_model extends CI_Model 
{
   function insertdesctop($data1)
   {
   	$query = $this->db->insert('discussion',$data1);
    return $query;
   }

   function get_descs()
   {
   	$query = $this->db->get('discussion');
   	return $query->result();
   }

   function changestat($id,$newstat)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->update('discussion',$newstat);
   	return $query;
   }

   function edit_topic_part($id)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->get('discussion');
   	return $query->row();
   }

   function updatedesctop($data1,$did)
   {
   	$this->db->where('discussion_id',$did);
   	$query = $this->db->update('discussion',$data1);
   	return $query;
   }

   function deletedisc($id)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->delete('discussion');
   	return $query;
   }
}