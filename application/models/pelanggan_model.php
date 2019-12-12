<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
	public function getAlldata()
	{
		$this->db->select('m_pelanggan.*, m_site.*, m_sim_card.*, m_meter.no_seri, m_meter.tipe as meter_tipe, m_meter.merk as meter_merk, m_modem.*');
		$this->db->from('m_pelanggan');
		$this->db->join('m_site', 'm_site.id = m_pelanggan.site_id');
		$this->db->join('m_meter', 'm_meter.id = m_pelanggan.meter_id');
		$this->db->join('m_modem', 'm_modem.id = m_pelanggan.modem_id');
		$this->db->join('m_sim_card', 'm_sim_card.id = m_pelanggan.sim_card_id');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getDataId($id)
	{
		$this->db->select('m_pelanggan.*, m_site.*, m_sim_card.*, m_meter.no_seri, m_meter.tipe as meter_tipe, m_meter.merk as meter_merk, m_modem.*');
		$this->db->from('m_pelanggan');
		$this->db->join('m_site', 'm_site.id = m_pelanggan.site_id');
		$this->db->join('m_meter', 'm_meter.id = m_pelanggan.meter_id');
		$this->db->join('m_modem', 'm_modem.id = m_pelanggan.modem_id');
		$this->db->join('m_sim_card', 'm_sim_card.id = m_pelanggan.sim_card_id');
		$this->db->where('m_pelanggan.id_pel', $id);
		$result = $this->db->get()->row();
		return $result;
	}
}
