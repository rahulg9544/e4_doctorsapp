<?php
class Admin_members_model extends CI_Model 
{
	function getmail_Count($mailid)
	{
		$squery = "SELECT count(*) AS mailcount FROM members WHERE Email_id='$mailid'";
		$query = $this->db->query($squery);
		return $query->row(); 
	}

	function insertmemb($data1)
	{
		$query = $this->db->insert('members',$data1);
		return $query;
	}

	function updatememb($data1,$reg_id)
	{
		$this->db->where('members_id',$reg_id);
		$query = $this->db->update('members',$data1);
		return $query;
	}

	function getlastid()
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

	function getsamemail($mailid)
	{
		$this->db->where('Email_id',$mailid);
		$query = $this->db->get('members');
		return $query->row();
	}

	function get_members()
	{
		$query =$this->db->get('members');
		return $query->result();
	}

	function edit_membpart($id)
	{
		$this->db->where('members_id',$id);
		$query = $this->db->get('members');
		return $query->row();
	}

	function delete_memb_part($id)
	{
		$this->db->where('members_id',$id);
		$query = $this->db->delete('members');
		return $query;
	}
}