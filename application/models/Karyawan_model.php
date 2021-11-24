<?php

class Karyawan_model extends CI_model {
	public function lihatkaryawan()
	{
		return $this->db->get('karyawan')->result_array();
	}
}