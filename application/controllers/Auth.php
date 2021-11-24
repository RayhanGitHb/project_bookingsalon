<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function index()
    {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Admin Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
			
			
		} else {
			$this->_login();	
		}

    }
	
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$admin = $this->db->get_where('admin', ['email' => $email])->row_array();
		
		if ($admin) {
			if(password_verify($password, $admin['password'])) {
				$data = [
					'email' => $admin['email'],
				];
				$this->session->set_userdata($data);
				redirect('admin');
					
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Salah! </div>');
				redirect('auth');
			}
			
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Email Salah! </div>');
			redirect('auth');
		}
	}
	
	
	public function logout()
	{
		$this->session->unset_userdata('email');
		
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Anda Telah Logout! </div>');
		redirect('auth');	
	}
}