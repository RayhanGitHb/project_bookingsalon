<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel_model extends CI_model {
	
	//BOOKING
	
	public function lihatbooking()
	{
		return $this->db->get('booking')->result_array();
	}
	
	public function caribooking($keyword)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->like('nama',$keyword);
		$this->db->or_like('no_hp',$keyword);
		$this->db->or_like('alamat',$keyword);
		$this->db->or_like('tgl_booking',$keyword);
		$this->db->or_like('jam',$keyword);
		$this->db->or_like('jml_kategori',$keyword);
		$this->db->or_like('konfirmasi',$keyword);
		return $this->db->get()->result_array();
	}
	
	public function konfirmasiBooking($id)
	{
		$data = [
						'konfirmasi' => 1
				];
		
		$this->db->where('id', $id);
		$this->db->update('booking', $data);
	}
	
	public function balikkonfirmasiBooking($id)
	{
		$data = [
						'konfirmasi' => 0
				];
		
		$this->db->where('id', $id);
		$this->db->update('booking', $data);
	}
	
	public function hapusdataBooking($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('booking');
	}
	
	//KARYAWAN
	
	public function lihatkaryawan()
	{
		return $this->db->get('karyawan')->result_array();
	}
	
	public function hapusdataKaryawan($id_karyawan)
	{	
		$this->db->where('id_karyawan', $id_karyawan);
		$this->db->delete('karyawan');
	}
	
	public function tambahdataKaryawan()
	{	
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
		$rawdate = htmlentities($_POST['tgl_lahir']);
		$tanggal_lahir = date('Y-m-d', strtotime($rawdate));
		$tempat_lahir = $this->input->post('tempat_lahir');
		$agama = $this->input->post('agama');
		
		$upload_image = $_FILES['image']['name'];
		
		if($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '8000';
			$config['upload_path'] = './assets/admin/images/profile/';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
			} 
		
		} else {
			$new_image = 'default.jpg';
		}

		$data = [
					'nama' => $nama,
					'email' => $email,
					'no_hp' => $nohp,
					'alamat' => $alamat,
					'tanggal_lahir' => $tanggal_lahir,
					'tempat_lahir' => $tempat_lahir,
					'agama' => $agama,
					'profil' => $new_image
			 ];
		$this->db->insert('karyawan', $data);
	}
	
	public function editdataKaryawan()
	{
		$id_karyawan = $this->input->post('id_karyawan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
		$rawdate = htmlentities($_POST['tanggal_lahir']);
		$tgllahir = date('Y-m-d', strtotime($rawdate));
		$tempat_lahir = $this->input->post('tempat_lahir');
		$agama = $this->input->post('agama');
		
		$upload_image = $_FILES['image']['name'];
		
		if($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '8000';
			$config['upload_path'] = './assets/admin/images/profile/';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('profil', $new_image);

			} 
		
		}

		$this->db->set('nama', $nama);
		$this->db->set('email', $email);
		$this->db->set('no_hp', $nohp);
		$this->db->set('alamat', $alamat);
		$this->db->set('tanggal_lahir', $tgllahir);
		$this->db->set('tempat_lahir', $tempat_lahir);
		$this->db->set('agama', $agama);
		$this->db->where('id_karyawan', $id_karyawan);
		$this->db->update('karyawan');
	}
	
	//KATEGORI
	
	public function lihatkategori()
	{
		return $this->db->get('list_kategori')->result_array();
	}
	
	public function tambahdataKategori()
	{	
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		
		$upload_image = $_FILES['image']['name'];
		
		if($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '5000';
			$config['upload_path'] = './assets/main/images/layanan/';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
			} 
		
		} else {
			$new_image = 'default.jpg';
		}

		$data = [
					'kategori' => $kategori,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'gambar' => $new_image
			 ];
		$this->db->insert('list_kategori', $data);
	}
	
	public function editdataKategori()
	{
		
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		
		$upload_image = $_FILES['image']['name'];
		
		if($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '5000';
			$config['upload_path'] = './assets/main/images/layanan/';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('image')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('gambar', $new_image);
			
			} 
		
		}
		$this->db->set('kategori', $kategori);
		$this->db->set('deskripsi', $deskripsi);
		$this->db->set('harga', $harga);
		$this->db->where('id', $id);
		$this->db->update('list_kategori');
	}
	
	public function hapusdataKategori($id)
	{	
		$this->db->where('id', $id);
		$this->db->delete('list_kategori');
	}
}
	