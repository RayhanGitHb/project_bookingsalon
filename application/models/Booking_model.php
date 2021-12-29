<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
	public function lihatkategori()
	{
		return $this->db->get('list_kategori')->result_array();
	}
	
	public function lihatkaryawan()
	{
		return $this->db->get('karyawan')->result_array();
	}
	
	public function simpan($table, $data)
	{
		$query = $this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	
	public function tampilTransaksi()
	{
		return $this->db->get('booking')->result_array();
	}

	public function ambilkategori($keyword)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->like('id_user',$keyword);
		return $this->db->get()->result_array();
	}
}