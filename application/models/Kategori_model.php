<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	public function lihatListKategori()
	{
		return $this->db->get('list_kategori')->result_array();
	}
	
	
}