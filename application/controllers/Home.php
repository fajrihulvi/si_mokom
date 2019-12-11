<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));

	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Silahkan Login Terlebih Dahulu!</div>');
			
			redirect('auth/login', 'refresh');
		}

		$this->template->load('admin/template', 'home/index', $data);
	}

	public function pemeriksaan()
	{
		$data['title'] = 'Pemeriksaan';
		$this->template->load('admin/template', 'home/pemeriksaan', $data);
	}

	public function pasang_baru()
	{
		$data['title'] = 'Pasang Baru';
		$this->template->load('admin/template', 'home/pasang_baru', $data);
	}

	public function maps()
	{
		$data['title'] = 'Maps Pelanggan';
		$this->template->load('admin/template', 'home/maps', $data);
	}

	public function data_wo()
	{
		$data['title'] = 'Data WO';
		$this->template->load('admin/template', 'home/data_wo', $data);
	}

	public function reset_modem()
	{
		$data['title'] = 'Reset Modem';
		$this->template->load('admin/template', 'home/reset_modem', $data);
	}
}