<?php
if (!defined('BASEPATH')) 
	exit('No Direct Script Access Allowed');

class mailmodel extends CI_Model
{
	public function getData()
	{
		return $this->db->get('user');
	}
	
	public function getDataById($id)
	{
		return $this->db->where('id', $id)->get('user');
	}

	public function insertData()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
		);
		if ($this->db->insert('user',$data)) 
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
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
		);
		$where = array('id' => $id);
		$this->db->where($where);
		if ($this->db->update('user',$data)) 
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
		return $this->db->delete('user');
	}
}