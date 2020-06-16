<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function view()
	{
		$this->load->model('mailmodels');
		$data['data'] = $this->mailmodels->getData();

		$this->load->view('Mails/output', $data);
	}
	public function index()
	{
		try
		{
			$this->load->database();
			echo ". ";
		}
		catch(exception $e)
		{
			echo "Disconnect ";
		}
		$this->load->model('mailmodels');
		$this->load->model('mailtypemodel');
		if ($this->input->post()) 
		{
			if ($this->mailmodels->insertData()) 
			{
				echo'Berhasil Disimpan';
				redirect('Mail/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		// var_dump($this->mailtypemodel->getData()->result());exit;
		$data['tipesurat'] = $this->mailtypemodel->getData();
		$this->load->view('Mails/input',$data);
	}
	public function delete($id)
	{
		$this->load->model('mailmodels');
		$this->mailmodels->deleteData($id);

		redirect('Mail/view');
	}
	public function edit($id)
	{
		$this->load->model('mailmodels');
		if ($this->input->post()) 
		{
			if ($this->mailmodels->editData($id)) 
			{
				echo "Berhasil Disimpan";
				redirect('Mail/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$data['data'] = $this->mailmodels->getDataById($id);
		$this->load->view('Mails/edit', $data);
	}
}