<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SimCard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth'));
	}

	public function index()
	{
		$data['title'] = 'Data Sim Card';
		$data['simcard'] = $this->db->get('m_sim_card')->result_array();
		$this->template->load('admin/template', 'master/simcard/index', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('no_sim', 'No SIM', 'trim|required');
        $this->form_validation->set_rules('brand', 'Brand', 'trim|required');

        if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_sim' => $this->input->post('no_sim'),
				'brand' => $this->input->post('brand')
			];
			$this->db->insert('m_sim_card', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Tambah Data!</div>');
			redirect('simcard', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert"> Gagal Tambah Data!</div>');
			redirect('simcard', 'refresh');
		}
	}

	public function tampilubah()
	{
		echo json_encode($this->db->get_where('m_sim_card', ['no_sim' => $_POST['id']])->row());
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('no_sim', 'No SIM', 'trim|required');
        $this->form_validation->set_rules('brand', 'Brand', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'no_sim' => $this->input->post('no_sim'),
				'brand' => $this->input->post('brand'),
			];
			$this->db->where('no_sim', $id);
			$this->db->update('m_sim_card', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data!</div>');
			redirect('simcard', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert"> Gagal Ubah Data!</div>');
			redirect('simcard', 'refresh');
		}
	}

	public function hapus($id)
	{
		if($this->db->delete('m_sim_card', ['no_sim' => $id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data!</div>');
			redirect('simcard', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Hapus Data!</div>');
			redirect('simcard', 'refresh');
		}
	}
}