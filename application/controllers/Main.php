<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
    public function index()
    {
		$data['list_kategori'] = $this->Booking_model->lihatkategori();
		$data['karyawan'] = $this->Booking_model->lihatkaryawan();
		$this->load->view('main/index', $data);
    }
	
	public function tambah()
    {	
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('nohp', 'Nohp', 'required|trim|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		
		
        if($this->form_validation->run() == false) {
		$this->index();
		} else {
			$nama = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$alamat = $this->input->post('alamat');
			$jam = $this->input->post('jam');
			$rawdate = htmlentities($_POST['tglbooking']);
			$tglbooking = date('Y-m-d', strtotime($rawdate));
				 $data = [
						'nama_user' => $nama,
						'no_hp' => $nohp,
						'alamat_user' => $alamat,
						'tgl_booking' => $tglbooking
				 ];

				
			$id_user = $this->Booking_model->simpan('user', $data); 
			$kategori = count($this->input->post('kategori'));
			for($i = 0; $i < $kategori; $i++)
			{
				$data1[$i] = array(
				'id_user' => $id_user,
				'kategori' => $this->input->post('kategori['.$i.']')
				);
				
				$insert1 = $this->Booking_model->simpan('kategori', $data1[$i]);
			}
			$total = $this->input->post('total');
				$data2 = [
						'id_user' => $id_user,
						'nama' => $nama,
						'no_hp' => $nohp,
						'alamat' => $alamat,
						'tgl_booking' => $tglbooking,
						'jam' => $jam,
						'jml_kategori' => $kategori,
						'jml_biaya' => $total,
						'bukti_pembayaran' => 'default_bukti.jpg',
						'konfirmasi' => 0
				];
				$insert2 = $this->Booking_model->simpan('booking', $data2);
				$this->session->set_userdata($data2);
			redirect('Main/transaksi');
			
		}
    }
	
	Public function transaksi()
	{	
		$this->session->userdata('id_user');
		$date = $this->session->userdata('booking');
		
		
		$this->load->view('main/transaksi', $date);
	}
	
	Public function kirimbukti()
	{
		$this->session->userdata('id_user');
		$date = $this->session->userdata('booking');
		
		$nama = $this->input->post('nama');
		
		
		
		$upload_bukti = $_FILES['bukti']['name'];
		
		if ($upload_bukti) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '5000';
			$config['upload_path'] = './assets/admin/images/bukti/';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload('bukti')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('bukti_pembayaran', $new_image);
			} else {
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
				redirect('Main/transaksi');
			}
		}
		$this->db->where('nama', $nama);
		$this->db->update('booking');
		
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><strong>Bukti Pembayaran telah dikirim</strong></div>');
		
		$this->load->view('main/transaksi1', $date);
		
		
		
		
	}
	
}