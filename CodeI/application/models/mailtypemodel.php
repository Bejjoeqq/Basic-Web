<?php
if (!defined('BASEPATH')) 
	exit('No Direct Script Access Allowed');

class mailtypemodel extends CI_Model
{
	public function getData()
	{
		return $this->db->get('mailtype');
	}
	
	public function getDataById($id)
	{
		return $this->db->where('id', $id)->get('mailtype');
	}

	public function insertData()
	{
		$data = array(
			'type' => $this->input->post('type'),
		);
		if ($this->db->insert('mailtype',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function editData($id)
	{
		$data = array(
			'type' => $this->input->post('type'),
		);
		$where = array('id' => $id);
		$this->db->where($where);
		if ($this->db->update('mailtype',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function deleteData($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('mailtype');
	}
}