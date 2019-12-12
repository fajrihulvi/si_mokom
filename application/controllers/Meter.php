<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function index()
	{
		$data['title'] = 'Data Meter';
		$data['meter'] = $this->db->get('m_meter')->result_array();
		$this->template->load('admin/template', 'master/meter/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('no_seri', 'No Seri', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('merk', 'merk', 'trim|required');

        if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_seri' => $this->input->post('no_seri'),
				'tipe' => $this->input->post('type'),
				'merk' => $this->input->post('merk')
			];
			$this->db->insert('m_meter', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Tambah Data!</div>');
			redirect('meter', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert"> Gagal Tambah Data!</div>');
			redirect('meter', 'refresh');
		}
	}

	public function tampilubah()
	{
		echo json_encode($this->db->get_where('m_meter', ['no_seri' => $_POST['id']])->row());
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('no_seri', 'No Seri', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('merk', 'merk', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_seri' => $this->input->post('no_seri'),
				'tipe' => $this->input->post('type'),
				'merk' => $this->input->post('merk')
			];
			$this->db->where('no_seri', $id);
			$this->db->update('m_meter', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data!</div>');
			redirect('meter', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Gagal Ubah Data!</div>');
			redirect('meter', 'refresh');
		}
	}

	public function hapus($id)
	{
		if($this->db->delete('m_meter', ['no_seri' => $id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data!</div>');
			redirect('meter', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Hapus Data!</div>');
			redirect('meter', 'refresh');
		}
	}
}