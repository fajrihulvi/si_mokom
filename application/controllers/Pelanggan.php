<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pelanggan_model', 'pelanggan');
	}
	public function index()
	{
		$data['title'] = "Data Pelanggan";
		$data['pelanggan'] = $this->pelanggan->getAllData();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/template/top_bar');
		$this->load->view('master/pelanggan', $data);
		$this->load->view('admin/template/footer');
	}

}