<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailtypee extends CI_Controller {

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
		$this->load->model('mailtypemodel');
		$data['data'] = $this->mailtypemodel->getData();

		$this->load->view('mtype/output', $data);
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
			$this->load->model('mailtypemodel');
			if ($this->mailtypemodel->insertData()) 
			{
				echo'Berhasil Disimpan';
				redirect('Mailtypee/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$this->load->view('mtype/input');
	}
	public function delete($id)
	{
		$this->load->model('mailtypemodel');
		$this->mailtypemodel->deleteData($id);

		redirect('Mailtypee/view');
	}
	public function edit($id)
	{
		$this->load->model('mailtypemodel');
		if ($this->input->post()) 
		{
			if ($this->mailtypemodel->editData($id)) 
			{
				echo "Berhasil Disimpan";
				redirect('Mailtypee/view');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$data['data'] = $this->mailtypemodel->getDataById($id);

		$this->load->view('mtype/edit', $data);
	}
}