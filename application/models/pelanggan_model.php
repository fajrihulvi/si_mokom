<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('m_pelanggan')->result_array();
	}
}
