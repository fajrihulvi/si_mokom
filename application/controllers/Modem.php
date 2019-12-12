<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Modem extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function index()
	{
		$data['title'] = 'Data modem';
		$data['modem'] = $this->db->get('m_modem')->result_array();
		$this->template->load('admin/template', 'master/modem/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('no_imei', 'No Seri', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('merk', 'merk', 'trim|required');

        if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_imei' => $this->input->post('no_imei'),
				'tipe' => $this->input->post('type'),
				'merk' => $this->input->post('merk')
			];
			$this->db->insert('m_modem', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Tambah Data!</div>');
			redirect('modem', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert"> Gagal Tambah Data!</div>');
			redirect('modem', 'refresh');
		}
	}

	public function tampilubah()
	{
		echo json_encode($this->db->get_where('m_modem', ['no_imei' => $_POST['id']])->row());
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('no_imei', 'No Seri', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required');
        $this->form_validation->set_rules('merk', 'merk', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_imei' => $this->input->post('no_imei'),
				'tipe' => $this->input->post('type'),
				'merk' => $this->input->post('merk')
			];
			$this->db->where('no_imei', $id);
			$this->db->update('m_modem', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data!</div>');
			redirect('modem', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Gagal Ubah Data!</div>');
			redirect('modem', 'refresh');
		}
	}

	public function hapus($id)
	{
		if($this->db->delete('m_modem', ['no_imei' => $id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data!</div>');
			redirect('modem', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Hapus Data!</div>');
			redirect('modem', 'refresh');
		}
	}
}