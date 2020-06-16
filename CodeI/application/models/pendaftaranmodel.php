<?php
if (!defined('BASEPATH')) 
	exit('No Direct Script Access Allowed');

class pendaftaranmodel extends CI_Model
{
	public function getData()
	{
		return $this->db->get('pendaftaran');
	}
	
	public function getDataById($id)
	{
		return $this->db->where('ID', $id)->get('pendaftaran');
	}

	public function insertData()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
		);
		if ($this->db->insert('pendaftaran',$data)) 
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
			'nama' => $this->input->post('nama'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
		);
		$where = array('ID' => $id);
		$this->db->where($where);
		if ($this->db->update('pendaftaran',$data)) 
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
		$this->db->where('ID',$id);
		return $this->db->delete('pendaftaran');
	}
}