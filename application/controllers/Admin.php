 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
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
	 public function bookingdata()
	 {
		$data['title'] = 'Data Booking';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/bookingdata', $data);
		$this->load->view('templates/footer', $data);
	 }
	 public function karyawan()
	 {
		$data['title'] = 'Data Karyawan';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['karyawan'] = $this->Karyawan_model->lihatkaryawan();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/karyawan', $data);
		$this->load->view('templates/footer', $data);
	 }
	 public function kategori()
	 {
		$data['title'] = 'Data Kategori';
		$data['admin'] = $this->db->get_where('admin', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('templates/footer', $data);
	 }
}