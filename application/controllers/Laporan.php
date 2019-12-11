<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth'));

	}

	public function pemeriksaan()
	{
		$data['title'] = 'Pemeriksaan';
		$this->template->load('admin/template','laporan/pemeriksaan',$data);
	}

	public function tindak_lanjut()
	{
		$data['title'] = 'Tindak Lanjut Pemeriksaan';
		$this->template->load('admin/template','laporan/tindak_lanjut',$data);
	}
}