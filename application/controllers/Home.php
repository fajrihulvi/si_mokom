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
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">Silahkan Login Terlebih Dahulu!</div>');
			
			redirect('auth/login', 'refresh');
		}

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/top_bar');
		$this->load->view('admin/index');
		$this->load->view('admin/template/footer');

	}
}