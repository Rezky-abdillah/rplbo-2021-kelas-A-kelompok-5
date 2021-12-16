<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');

		// //proteksi halaman
		// if ($this->session->userdata('username058') == "" && $this->session->userdata('password') == "") {
		// 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
		// 				Silahkan login terlebih dahulu.!</div>');
		// 				redirect(base_url('login'),'refresh');
		// }
	}

	public function index()
	{
		$user = $this->User_model->data();

		$data = array('title'	=>	'Dashboard',
						'menu'	=>	'Dashboard',
						'isi'	=>	'admin/dashboard/list');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

}
/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */