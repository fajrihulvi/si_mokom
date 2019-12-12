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
		//var_dump($data['pelanggan']); die;
		$this->template->load('admin/template', 'master/pelanggan/index', $data);

	}

	public function tambah()
	{
		$data['title'] = "Tambah Pelanggan";
		$data['sites'] = $this->db->get('m_site')->result_array();
		$data['meter'] = $this->db->get('m_meter')->result_array();
		$data['modem'] = $this->db->get('m_modem')->result_array();
		$data['simcard'] = $this->db->get('m_sim_card')->result_array();

		$this->form_validation->set_rules('id_pelanggan', 'Id Pelanggan', 'trim|required');
        $this->form_validation->set_rules('site', 'Nama Site', 'trim|required');
        $this->form_validation->set_rules('nama_plgn', 'Nama Pelanggan', 'trim|required');
        $this->form_validation->set_rules('alamat_plgn', 'Alamat Pelanggan', 'trim|required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'trim|required');
        $this->form_validation->set_rules('daya', 'Daya', 'trim|required');
        $this->form_validation->set_rules('lat', 'Lat', 'trim|required');
        $this->form_validation->set_rules('long', 'Long', 'trim|required');
        $this->form_validation->set_rules('status', 'Long', 'trim|required');
        $this->form_validation->set_rules('meter', 'Meter', 'trim|required');
        $this->form_validation->set_rules('modem', 'Modem', 'trim|required');
        $this->form_validation->set_rules('simcard', 'Simcard', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'id_pel'		=> $this->input->post('id_pelanggan'),
				'site_id' 		=> (int)$this->input->post('site'),
				'nama_pelanggan'=> $this->input->post('nama_plgn'),
				'alamat' 		=> $this->input->post('alamat_plgn'),
				'tarif' 		=> $this->input->post('tarif'),
				'daya' 			=> $this->input->post('daya'),
				'lat' 			=> $this->input->post('lat'),
				'long' 			=> $this->input->post('long'),
				'status' 		=> $this->input->post('status'),
				'meter_id' 		=> (int)$this->input->post('meter'),
				'modem_id' 		=> (int)$this->input->post('modem'),
				'sim_card_id' 	=> (int)$this->input->post('simcard'),
			];

			if($this->db->insert('m_pelanggan', $data)){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Tambah Data</div>');
				redirect('pelanggan', 'refresh');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Tambah Data!</div>');
				redirect('pelanggan', 'refresh');
			}
		}else{
			$this->template->load('admin/template', 'master/pelanggan/tambah_pelanggan', $data);
		}
	}

	public function edit($id)
	{
		$data['title'] = "Edit Pelanggan";
		$data['sites'] = $this->db->get('m_site')->result_array();
		$data['meter'] = $this->db->get('m_meter')->result_array();
		$data['modem'] = $this->db->get('m_modem')->result_array();
		$data['simcard'] = $this->db->get('m_sim_card')->result_array();
		$data['pelanggan'] = $this->pelanggan->getDataId($id);

		//var_dump($data['pelanggan']); die;
        $this->form_validation->set_rules('site', 'Nama Site', 'trim|required');
        $this->form_validation->set_rules('nama_plgn', 'Nama Pelanggan', 'trim|required');
        $this->form_validation->set_rules('alamat_plgn', 'Alamat Pelanggan', 'trim|required');
        $this->form_validation->set_rules('tarif', 'Tarif', 'trim|required');
        $this->form_validation->set_rules('daya', 'Daya', 'trim|required');
        $this->form_validation->set_rules('lat', 'Lat', 'trim|required');
        $this->form_validation->set_rules('long', 'Long', 'trim|required');
        $this->form_validation->set_rules('status', 'Long', 'trim|required');
        $this->form_validation->set_rules('meter', 'Meter', 'trim|required');
        $this->form_validation->set_rules('modem', 'Modem', 'trim|required');
        $this->form_validation->set_rules('simcard', 'Simcard', 'trim|required');

		if ($this->form_validation->run() === TRUE)
		{
			$data = [
				'site_id' 		=> (int)$this->input->post('site'),
				'nama_pelanggan'=> $this->input->post('nama_plgn'),
				'alamat' 		=> $this->input->post('alamat_plgn'),
				'tarif' 		=> $this->input->post('tarif'),
				'daya' 			=> $this->input->post('daya'),
				'lat' 			=> $this->input->post('lat'),
				'long' 			=> $this->input->post('long'),
				'status' 		=> $this->input->post('status'),
				'meter_id' 		=> (int)$this->input->post('meter'),
				'modem_id' 		=> (int)$this->input->post('modem'),
				'sim_card_id' 	=> (int)$this->input->post('simcard'),
			];
			$this->db->where('id_pel', $id);
			if($this->db->update('m_pelanggan', $data)){
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Ubah Data</div>');
				redirect('pelanggan', 'refresh');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Ubah Data!</div>');
				redirect('pelanggan', 'refresh');
			}
		}else{
			$this->template->load('admin/template', 'master/pelanggan/edit_pelanggan', $data);
		}
	}

	public function delete($id)
	{
		if($this->db->delete('m_pelanggan', ['id_pel' => $id])){
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Berhasil Hapus Data</div>');
			redirect('pelanggan', 'refresh');
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Gagal Hapus Data!</div>');
			redirect('pelanggan', 'refresh');
		}
	}

}