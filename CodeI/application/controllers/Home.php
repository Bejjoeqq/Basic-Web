<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->model('pendaftaranmodel');
		$data['data'] = $this->pendaftaranmodel->getData();

		$this->load->view('Home/index', $data);
	}
	public function daftar()
	{
		try
		{
			$this->load->database();
			echo "Connect ";
		}
		catch(exception $e)
		{
			echo "Disconnect ".$e;
		}
		if ($this->input->post()) 
		{
			$this->load->model('pendaftaranmodel');
			if ($this->pendaftaranmodel->insertData()) 
			{
				echo'Berhasil Disimpan';
				redirect('Home/index');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$this->load->view('Home/daftar');
	}
	public function delete($id)
	{
		$this->load->model('pendaftaranmodel');
		$this->pendaftaranmodel->deleteData($id);

		redirect('Home/index');
	}
	public function edit($id)
	{
		$this->load->model('pendaftaranmodel');
		if ($this->input->post()) 
		{
			if ($this->pendaftaranmodel->editData($id)) 
			{
				echo "Berhasil Disimpan";
				redirect('Home/index');
			}
			else
			{
				echo "Gagal Disimpan";
			}
		}
		$data['data'] = $this->pendaftaranmodel->getDataById($id);

		$this->load->view('Home/edit', $data);
	}
}