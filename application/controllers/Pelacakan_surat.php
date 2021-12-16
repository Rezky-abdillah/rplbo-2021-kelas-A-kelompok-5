<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelacakan_surat extends CI_Controller {

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

		$data = array('title'	=>	'DATA PELACAKAN SURAT',
						'menu'	=>	'PELACAKAN SURAT',
						'isi'	=>	'pelacakan/data');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

    public function tambah()
	{
		$user = $this->User_model->data();

		$data = array('title'	=>	'TAMABH PENGAJUAN SURAT',
						'menu'	=>	'INPUT PENGAJUAN SURAT',
						'isi'	=>	'pengajuan/tambah');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

}