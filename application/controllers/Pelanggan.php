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

		$this->template->load('admin/template', 'master/pelanggan', $data);

	}

}