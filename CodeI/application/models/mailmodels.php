<?php
if (!defined('BASEPATH')) 
	exit('No Direct Script Access Allowed');

class mailmodels extends CI_Model
{
	public function getData()
	{
		return $this->db
			->select('mail.*,mailtype.type')
			->from('mail')
			->join('mailtype','mail.mail_typeid = mailtype.id')
			->get();
	}
	
	public function getDataById($id)
	{
		return $this->db->where('id', $id)->get('mail');
	}

	public function insertData()
	{
		$config['upload_path'] = './asset/';
		$config['allowed_types'] = 'gif|jpg|png|pdf|txt';
		$this->load->library('upload',$config);

		if ($this->upload->do_upload('file_upload')) 
		{
			$data = array(
			'incoming_at' => date('Y-m-d h:i'),
			'mail_code' => $this->input->post('mail_code'),
			'mail_date' => $this->input->post('mail_date'),
			'mail_from' => $this->input->post('mail_from'),
			'mail_to' => $this->input->post('mail_to'),
			'mail_subject' => $this->input->post('mail_subject'),
			'description' => $this->input->post('description'),
			'file_upload' => $this->upload->data('full_path'),
			'mail_typeid' => $this->input->post('mail_typeid'),
			'userid' => 3,);
		
		
		if ($this->db->insert('mail',$data)) 
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	var_dump($this->upload->display_errors());
	return false;
	}
	public function editData($id)
	{
		$data = array(
			'incoming_at' => date('Y-m-d h:i'),
			'mail_code' => $this->input->post('mail_code'),
			'mail_date' => $this->input->post('mail_date'),
			'mail_from' => $this->input->post('mail_from'),
			'mail_to' => $this->input->post('mail_to'),
			'mail_subject' => $this->input->post('mail_subject'),
			'description' => $this->input->post('description'),
			'file_upload' => $this->upload->data('full_path'),
			'mail_typeid' => $this->input->post('mail_typeid'),
			'userid' => 3,
		);
		$where = array('id' => $id);
		$this->db->where($where);
		if ($this->db->update('mail',$data)) 
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
		return $this->db->delete('mail');
	}
}