<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	//halaman utama
	public function index()
	{
		$valid = $this->form_validation;

		$valid->set_rules('username','Username', 'required', 
				array('required' => '%s Harus diisi'));
		
		$valid->set_rules('password','Password', 'required|min_length[5]', 
				array('required' => '%s Harus diisi',
					'min_length' => '%s Minimal 5 karakter'));

		if ($valid->run() === FALSE){

			$data = array('title' => 'Login Administrator');
			$this->load->view('login/login_view', $data, FALSE);
		}else{

			//CEK USERNAME DAN PASSWORD DENGAN DATABASE
			$i			= $this->input;
			$username	= $i->post('username');
			$password	= $i->post('password');
			$level	= $i->post('level');

			$check_login	= $this->User_model->login($username,$password,$level);

			if	($check_login) {
				
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('password',$password);
				$this->session->set_userdata('level',$level);
				$this->session->set_userdata('id_user',$check_login->id_user058);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Username atau Password anda salah!</div>');
				redirect(base_url('login'),'refresh');
			}
		}
	}


	public function logout()
	{
		$this->session->set_userdata('username058');
		$this->session->set_userdata('level');
		redirect(base_url('login'), 'refresh');
	}


	
}