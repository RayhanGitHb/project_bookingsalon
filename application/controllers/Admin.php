 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
			redirect('Auth');
		}
	}
	
	//DASHBOARD 
	 public function index()
	 {
		$data['title'] = 'Dashboard Admin';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer', $data);
	 }
	 
	 
		 
	 public function profile()
	 {
		$data['title'] = 'Profile Admin';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/footer', $data);
	 }
	 
	 public function ubahprofile()
	 {
		$data['title'] = 'Ubah Profile Admin';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		
		if ($this->form_validation->run() == false){
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/ubahprofile', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			
			$upload_image = $_FILES['image']['name'];
			
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '5000';
				$config['upload_path'] = './assets/admin/images/profile/';
				
				$this->load->library('upload', $config);
				
				if($this->upload->do_upload('image')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				
				} else {
					
				}
			
			}
			$this->db->set('nama', $nama);
			$this->db->where('email', $email);
			$this->db->update('admin');
			
			$this->session->set_flashdata('messageprofil', '<div class="alert alert-success" role="alert">Profil telah diubah</div>');
			redirect('Admin/profile');
		}
		
	 }
	 
	 
	 //BOOKING
	 
	 public function bookingdata()
	 {
		$data['title'] = 'Data Booking';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['booking'] = $this->Tabel_model->lihatbooking();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/bookingdata', $data);
		$this->load->view('templates/footer', $data);
	 }
	 
	 public function caribooking()
	 {
		$data['title'] = 'Data Booking';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();

		$keyword = $this->input->post('keyword');
		$data['booking'] = $this->Tabel_model->caribooking($keyword);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/bookingdata', $data);
		$this->load->view('templates/footer');
	 }
	 
	 public function konfirmasi($id)
	 {
		 $this->Tabel_model->konfirmasiBooking($id);
		 //$this->session->set_flashdata('flash', 'Dihapus');
		 redirect('Admin/bookingdata');
	 }
	 
	 public function balikkonfirmasi($id)
	 {
		 $this->Tabel_model->balikkonfirmasiBooking($id);
		 //$this->session->set_flashdata('flash', 'Dihapus');
		 redirect('Admin/bookingdata');
	 }
	 
	 public function hapusBooking($id)
	 {
		 $this->Tabel_model->hapusdataBooking($id);
		 redirect('Admin/bookingdata');
	 }
	 
	
	//KARYAWAWN
	 
	 public function karyawan()
	 {
		$data['title'] = 'Data Karyawan';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->Tabel_model->lihatkaryawan();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/karyawan', $data);
		$this->load->view('templates/footer', $data);
	 }
	 
	 public function tambahKaryawan()
	 {
		$this->Tabel_model->tambahdataKaryawan() ;
		//$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Admin/karyawan');
	 }
	 
	 public function editKaryawan()
	 {
		 $this->Tabel_model->editdataKaryawan();
		 //$this->session->set_flashdata('flash', 'Dihapus');
		 redirect('Admin/karyawan');
	 }
	 
	 public function hapusKaryawan($id_karyawan)
	 {
		 $this->Tabel_model->hapusdataKaryawan($id_karyawan);
		 redirect('Admin/karyawan');
	 }
	 
	 
	//KARYAWAWN 
	 
	 public function kategori()
	 {
		$data['title'] = 'Data Kategori';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['list_kategori'] = $this->Tabel_model->lihatkategori();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('templates/footer', $data);
	 }
	 
	 public function tambahkategori()
	 {
		$this->Tabel_model->tambahdataKategori() ;
		//$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Admin/kategori');
	 }
	 
	 public function editkategori()
	 {
		$this->Tabel_model->editdataKategori();
		 //$this->session->set_flashdata('flash', 'Dihapus');
		 redirect('Admin/kategori');
	 }
	 
	 public function hapuskategori($id)
	 {
		 $this->Tabel_model->hapusdataKategori($id);
		 redirect('Admin/kategori');
	 }
}