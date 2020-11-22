<?php
class Admin_api_model extends CI_Model 
{
	function fetch_emailid($mailid)
	{
		
		$query = $this->db->query("select * FROM members WHERE Email_id='$mailid'");
      	 
      	 return $query->result_array();

	}

	function fetch_count_event(){
		$sqlquery ="SELECT COUNT(*) AS num1 FROM event";
		$query = $this->db->query($sqlquery);
		return $query->row();
	}
	
	function fetch_count_member(){
		$sqlquery ="SELECT COUNT(*) AS num2 FROM members";
		$query = $this->db->query($sqlquery);
		return $query->row();
	}
	 
	function fecthabout(){
		$query =$this->db->get('about');
		return $query->result();
	}

	function about_Edit($id)
	{
		$this->db->where('about_id',$id);
		$query = $this->db->get('about');
		return $query->row();
	}
	function about_Update($page_id,$data1)
	{
		$this->db->where('about_id',$page_id);
		$query = $this->db->update('about',$data1);
		return $query;
	}

	function fetch_contact()
	{	
		$this->db->select('*')->from('contact');

		$query =$this->db->get();

		return $query->result_array();
	}

	function contact_Edit($id)
	{
		$this->db->where('contact_id',$id);
		$query = $this->db->get('contact');
		return $query->row();
	}

	function contact_Update($page_id,$data1)
	{
		$this->db->where('contact_id',$page_id);
		$query = $this->db->update('contact',$data1);
		return $query;
	}

	function contacts_Delete($id)
	{
		$this->db->where('contact_id',$id);
		$query = $this->db->delete('contact');
		return $query;
	}

	function insert_Contact($data1)
	{
		$this->db->insert('contact',$data1);
		return $query;
	}

	function get_Event()
	{
		$query =$this->db->get('event');
		return $query->result();
	}
	function event_Edit($id)
	{
		$this->db->where('event_id',$id);
		$query = $this->db->get('event');
		return $query->row();
	}

	function insert_Event($data1)
   	{
   		$query = $this->db->insert('event',$data1);
   		return $query;
   	}

   	function update_Event($page_id,$data1)
	{
		$this->db->where('event_id',$page_id);
		$query = $this->db->update('event',$data1);
		return $query;
	}

	function delete_Event($id)
	{
		$this->db->where('event_id',$id);
		$query = $this->db->delete('event');
		return $query;
	}

	function get_Lastid()
	{
		$sqry = "SELECT * FROM members ORDER BY members_id DESC LIMIT 1";

		$query= $this->db->query($sqry);

		

		if($query->num_rows()=='0')
		{
			return 0;
		}
		else
		{
			$query1 = $query->row();
			$lastid = $query1->members_id;

			return $lastid;
		}	
	}

	function getmailcount($mailid)
	{
		$squery = "SELECT count(*) AS mailcount FROM members WHERE Email_id='$mailid'";
		$query = $this->db->query($squery);
		return $query->row(); 
	}

	function insert_Member($data1)
	{
		$query = $this->db->insert('members',$data1);
		return $query;
	}

	function update_Member($data1,$reg_id)
	{
		$this->db->where('members_id',$reg_id);
		$query = $this->db->update('members',$data1);
		return $query;
	}

	function getsam_Email($mailid)
	{
		$this->db->where('Email_id',$mailid);
		$query = $this->db->get('members');
		return $query->row();
	}

	function edit_Membpart($id)
	{
		$this->db->where('members_id',$id);
		$query = $this->db->get('members');
		return $query->row();
	}

	function delete_Membpart($id)
	{
		$this->db->where('members_id',$id);
		$query = $this->db->delete('members');
		return $query;
	}

	function insert_Desctop($data1)
   	{
   		$query = $this->db->insert('discussion',$data1);

    	return $query;
   	}

   	 function update_Desctop($data1,$did)
   {
   	$this->db->where('discussion_id',$did);
   	$query = $this->db->update('discussion',$data1);
   	return $query;
   }

   function delete_Disc($id)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->delete('discussion');
   	return $query;
   }

   function get_Descs()
   {
   	$query = $this->db->get('discussion');
   	return $query->result();
   }

    function change_Stat($id,$newstat)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->update('discussion',$newstat);
 //   	$split = implode("",$newstat);
	// $query = "UPDATE discussion
	// 	SET discussion_status=$split
	// 	WHERE discussion_id=$id ";
   	return $query;
   }

   function edit_Topicpart($id)
   {
   	$this->db->where('discussion_id',$id);
   	$query = $this->db->get('discussion');
   	return $query->row();
   }

 //   function validate_login()
 //  {
	 	

	// }
}
?>