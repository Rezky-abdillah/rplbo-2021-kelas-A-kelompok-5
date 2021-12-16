<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_surat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengajuan');

		// //proteksi halaman
		// if ($this->session->userdata('username058') == "" && $this->session->userdata('password') == "") {
		// 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
		// 				Silahkan login terlebih dahulu.!</div>');
		// 				redirect(base_url('login'),'refresh');
		// }
	}

	public function index()
	{
		$pengajuan = $this->M_pengajuan->data();

		$data = array('title'	=>	'DATA PENGAJUAN SURAT',
						'menu'	=>	'PENGAJUAN SURAT',
						'pengajuan' => $pengajuan,
						'isi'	=>	'pengajuan/data');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

    public function tambah()
	{
		
		//Validasi
		$valid = $this->form_validation;
        $valid->set_rules('kode_surat','kode_surat','required|is_unique[pengajuan_surat.kode_surat]',array(
            'required'			=>'Kode surat harus diisi','is_unique'		=> 'Kode surat <strong>'.$this->input->post('kode_surat').'&nbsp; </strong> sudah ada. Masukkan Kode surat yg lain'));
		$valid->set_rules('status_pengguna','Status_pengguna','required',array(
			'required'			=>'Status pengguna harus diisi'));
		$valid->set_rules('nama','Nama','required',array(
			'required'			=>'Nama harus diisi'));
		$valid->set_rules('nomor_induk','nomor_induk','required',array(
			'required'			=>'Nomor induk harus diisi'));
		$valid->set_rules('tempat_lahir','Tempat_lahir','required',array(
			'required'			=>'Tempat lahir harus diisi'));
		$valid->set_rules('tempat_lahir','Tempat_lahir','required',array(
			'required'			=>'Tempat lahir harus diisi'));
		$valid->set_rules('tgl_lahir','Tgl_lahir','required',array(
			'required'			=>'Tanggal lahir harus diisi'));
		$valid->set_rules('jenis_kelamin','Jenis_kelamin','required',array(
			'required'			=>'Jenis kelamin harus diisi'));
		$valid->set_rules('alamat','alamat','required',array(
			'required'			=>'Alamat harus diisi'));
		$valid->set_rules('no_hp','No_hp','required',array(
			'required'			=>'No hp harus diisi'));
		$valid->set_rules('email','Email','required',array(
			'required'			=>'Email harus diisi'));
		$valid->set_rules('kelas','Kelas','required',array(
			'required'			=>'Kelas harus diisi'));


			// SP001
			// SLAMET
			// 123456
			// PEKANBARU
			// Jl. Buluh Cina No.13 A
			// 081389139911
			// slamet13@gmail.com
		if($valid->run()){
			

                        $i= $this->input;
                        $data = array(  
                        	'kode_surat'			=> $i->post('kode_surat'),
                        	'status_pengguna'		=> $i->post('status_pengguna'),
							'nama'					=> $i->post('nama'),
							'nomor_induk'			=> $i->post('nomor_induk'),
							'tempat_lahir'			=> $i->post('tempat_lahir'),
							'tgl_lahir'				=> $i->post('tgl_lahir'),
							'jenis_kelamin'			=> $i->post('jenis_kelamin'),
							'alamat'				=> $i->post('alamat'),
							'no_hp'					=> $i->post('no_hp'),
							'email'					=> $i->post('email'),
							'kelas'					=> $i->post('kelas'),
							'kategori'				=> $i->post('kategori'));

                        $this->M_pengajuan->tambah($data);
                        $this->session->set_flashdata('sukses', 'data telah ditambah');
                        redirect(base_url('pengajuan_surat'), 'refresh');        
                    

            }
		
			//end validasi
			$data = array('title'	=>	'TAMABH PENGAJUAN SURAT',
						'menu'	=>	'INPUT PENGAJUAN SURAT',
						'isi'	=>	'pengajuan/tambah');
			$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

}