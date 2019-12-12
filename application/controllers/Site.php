<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function index()
	{
		$data['title'] = 'Data Site';
		$data['site'] = $this->db->get('m_site')->result_array();
		$this->template->load('admin/template', 'master/site/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('site_code', 'Site Code', 'trim|required');
        $this->form_validation->set_rules('site_name', 'Site Name', 'trim|required');

        if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'site_code' => $this->input->post('site_code'),
				'site_name' => $this->input->post('site_name')
			];
			$this->db->insert('m_site', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Tambah Data!</div>');
			redirect('site', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert"> Gagal Tambah Data!</div>');
			redirect('site', 'refresh');
		}
	}

	public function tampilubah()
	{
		echo json_encode($this->db->get_where('m_site', ['site_code' => $_POST['id']])->row());
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('site_code', 'Site Code', 'trim|required');
        $this->form_validation->set_rules('site_name', 'Site Name', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'site_code' => $this->input->post('site_code'),
				'site_name' => $this->input->post('site_name')
			];
			$this->db->where('site_code', $id);
			$this->db->update('m_site', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data!</div>');
			redirect('site', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Gagal Ubah Data!</div>');
			redirect('site', 'refresh');
		}
	}

	public function hapus($id)
	{
		if($this->db->delete('m_site', ['site_code' => $id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data!</div>');
			redirect('site', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Hapus Data!</div>');
			redirect('site', 'refresh');
		}
	}

}