<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailtype extends CI_Controller {

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
		$this->load->model('mailmodel');
		$data['data'] = $this->mailmodel->getData();

		$this->load->view('Mail/view', $data);
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
		if ($this->input->post()) 
		{
			$this->load->model('mailmodel');
			if ($this->mailmodel->insertData()) 
			{
				echo'Berhasil Disimpan';
				redirect('Mailtype/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$this->load->view('Mail/home');
	}
	public function delete($id)
	{
		$this->load->model('mailmodel');
		$this->mailmodel->deleteData($id);

		redirect('Mailtype/view');
	}
	public function edit($id)
	{
		$this->load->model('mailmodel');
		if ($this->input->post()) 
		{
			if ($this->mailmodel->editData($id)) 
			{
				echo "Berhasil Disimpan";
				redirect('Mailtype/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$data['data'] = $this->mailmodel->getDataById($id);

		$this->load->view('Mail/edit', $data);
	}
}