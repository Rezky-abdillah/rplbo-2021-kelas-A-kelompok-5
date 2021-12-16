<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legalisir_surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_legalisir');

		// //proteksi halaman
		// if ($this->session->userdata('username058') == "" && $this->session->userdata('password') == "") {
		// 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
		// 				Silahkan login terlebih dahulu.!</div>');
		// 				redirect(base_url('login'),'refresh');
		// }
	}

	public function index()
	{
		$legalisir = $this->M_legalisir->data();

		$data = array('title'	=>	'DATA PENGAJUAN SURAT',
						'menu'	=>	'PENGAJUAN SURAT',
						'legalisir'	=>	$legalisir,
						'isi'	=>	'legalisir/data');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

	public function tambah()
	{
		
		//Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',array(
			'required'			=>'Nama harus diisi'));
		$valid->set_rules('nomor_induk','nomor_induk','required',array(
			'required'			=>'Nomor induk harus diisi'));
		$valid->set_rules('kelas','Kelas','required',array(
			'required'			=>'Kelas harus diisi'));
		$valid->set_rules('tujuan','Tujuan','required',array(
			'required'			=>'tujuan harus diisi'));


			// SP001
			// SLAMET
			// 123456
			// PEKANBARU
			// Jl. Buluh Cina No.13 A
			// 081389139911
			// slamet13@gmail.com
		if($valid->run()){
			if (!empty($_FILES['gambar']['name'])) {
				
				$config['upload_path'] = './assets/legalisir_surat';
				$config['allowed_types'] = 'docx|pdf|text|xlsx';
				$config['max_size'] = '2000';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar')) {
					$data = array('title' => 'TAMBAH LEGALISIR SURAT',
								'error' => $this->upload->display_errors('Ukuran file terlalu besar'),
								'menu'	=>	'INPUT LEGALISIR SURAT',
								'isi' => 'legalisir/tambah');
					$this->load->view('admin/layout/wrapper', $data, FALSE);
				}else {
					$upload_data = array('uploads' => $this->upload->data());


                        $i= $this->input;
                        $data = array(  
							'nama'					=> $i->post('nama'),
							'nomor_induk'			=> $i->post('nomor_induk'),
							'kelas'					=> $i->post('kelas'),
							'tujuan'					=> $i->post('tujuan'),
							'file_surat'				=> $upload_data['uploads']['file_name']);

                        $this->M_legalisir->tambah($data);
                        $this->session->set_flashdata('sukses', 'data telah ditambah');
                        redirect(base_url('legalisir_surat'), 'refresh');        
					}

				}else {
					$i = $this->input;
					$data = array(  'nama'					=> $i->post('nama'),
									'nomor_induk'			=> $i->post('nomor_induk'),
									'kelas'					=> $i->post('kelas'),
									'tujuan'					=> $i->post('tujuan'));
	
					$this->M_legalisir->tambah($data);
					$this->session->set_flashdata('sukses', 'Data telah ditambah');
					redirect(base_url('legalisir_surat'),'refresh');
				}
			}
		
			//end validasi
			$data = array('title'	=>	'TAMBAH LEGALISIR SURAT',
						'menu'	=>	'INPUT LEGALISIR SURAT',
						'isi'	=>	'legalisir/tambah');
			$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

}