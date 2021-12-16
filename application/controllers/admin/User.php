<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');

				//proteksi halaman
		// if ($this->session->userdata('username') == "" && $this->session->userdata('password') == "") {
		// 	$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
		// 				Silahkan login terlebih dahulu.!</div>');
		// 				redirect(base_url('login'),'refresh');
		// }
	}

	//halaman utama
	public function index()
	{
		$user = $this->User_model->data();

		$data = array('title'	=>	'Data User',
						'user'	=>	$user,
						'menu'	=>	'User',
						'isi'	=>	'admin/user/data');
		$this->load->view('admin/layout/wrapper',$data, FALSE);
	}

	public function tambah()
	{
		//Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',array(
			'required'			=>'Nama harus diisi'));
		$valid->set_rules('username','Username','required|is_unique[users.username]',array(
			'required'			=>'Username harus diisi','is_unique'		=> 'Username <strong>'.$this->input->post('username').
			'&nbsp; </strong> sudah ada. Buat username baru'));
		$valid->set_rules('password','Password','required|min_length[5]',array(
			'required'			=>'Password harus diisi',
			'mid_length'		=>'Password minimal 6 karakter'));
		$valid->set_rules('level','Level','required',array(
			'required'			=>'Nama harus diisi'));

		if($valid->run()){
			$i= $this->input;
                        $data = array(  
                        	'nama'				=> $i->post('nama'),
							'username'			=> $i->post('username'),
							'password'			=> sha1($i->post('password')),
							'level'		=> $i->post('level'));

                        $this->User_model->tambah($data);
                        $this->session->set_flashdata('sukses', 'data telah ditambah');
                        redirect(base_url('admin/user'));
		}
			//end validasi
				$data = array('title' => 'Tambah Data User',
								'menu'	=>	'User',
								'isi' => 'admin/user/tambah');
								$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	//Halaman Edit
	public function edit($id_user)
	{
		$user = $this->User_model->detail($id_user);
		//Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',array(
			'required'			=>'Nama harus diisi'));
		$valid->set_rules('email','Email','required|valid_email',array(
			'required'			=>'Email harus diisi',
			'valid_email'		=>'Format email tidak benar'));
		
		$valid->set_rules('password','Password','required|min_length[6]',array(
			'required'			=>'Password harus diisi',
			'mid_length'		=>'Password minimal 6 karakter'));

		if($valid->run()){

			if (!empty($_FILES['gambar']['name'])) {
				
			$config['upload_path'] = './assets/user';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']  = '20000';
			$config['max_width']  = '20000';
			$config['max_height']  = '20000';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$data = array('title' => 'Edit Data user',
								'user'	=> $user,
								'menu'	=>	'User',
								'error' => $this->upload->display_errors('ukuran file terlalu besar atau format file terlalu besar'),
								'isi' => 'admin/user/edit');
								$this->load->view('admin/layout/wrapper', $data, FALSE);
			}else{
				$upload_data = array('uploads' => $this->upload->data());

				$config['image_library']	=	'gd2';
				$config['source_image']		=	'./assets/user/'.$upload_data['uploads']['file_name'];
				$config['quality']			=	"100%";
				$config['maintain_ratio']	=	TRUE;
				$config['width']			=	360;
				$config['height']			=	360;
				$config['x_axis']			=	0;
				$config['y_axis']			=	0;
				$config['thumb_marker']		=	'';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				$data = array('id_user'			=> $id_user,
							'nama'				=> $i->post('nama'),
							'email'				=> $i->post('email'),
							'username'			=> $i->post('username'),
							// 'password'			=> sha1($i->post('password')),
							'akses_level'		=> $i->post('akses_level'),
							'keterangan'			=> $i->post('keterangan'),
							'photo'				=> $upload_data['uploads']['file_name']);

				$this->User_model->edit($data);
				$this->session->set_flashdata('sukses', 'data telah diedit');
				redirect(base_url('admin/user'),'refresh');
			}}else{
				$i = $this->input;
				$data = array('id_user'			=> $id_user,
							'nama'				=> $i->post('nama'),
							'email'			=> $i->post('email'),
							'username'			=> $i->post('username'),
							// 'password'			=> sha1($i->post('password')),
							'akses_level'		=> $i->post('akses_level'),
							'keterangan'			=> $i->post('keterangan'));
							

				$this->User_model->edit($data);
				$this->session->set_flashdata('sukses', 'data berhasil diedit');
				redirect(base_url('admin/user'),'refresh');
			}
		}
			//end validasi
				$data = array('title' => 'Tambah Data User',
								'user'	=> $user,
								'menu'	=>	'User',
								'isi' => 'admin/user/edit');
								$this->load->view('admin/layout/wrapper', $data, FALSE);
			
		}
	public function delete($id_user)
	{
		

		$data = array('id_user'	=> $id_user);
		$this->User_model->delete($data);
		$this->session->set_flashdata('sukses','Data Telah Di Hapus');
		redirect(base_url('admin/user'),'refresh');
	}
	public function detail($id_user){
	//Proteksi Hapus Disini
	if($this->session->userdata('username') == "" && $this->session->userdata('akses_level') == ""){
		$this->session->set_flashdata('sukses','Silahkan Login Dulu');
		redirect(base_url('login'),'refresh');
	}
	//Proses Hapus Gambar
	$user = $this->user->detail($id_user);

	//End Proteksi
	$data = array('id_user'	=> $id_user);
	
	redirect(base_url('admin/user'),'refresh');
	}

	public function print()
	{
		$data['user']=$this->User_model->data();
		$this->load->view('admin/user/print',$data, FALSE);
	}

	public function print_kartu($id_user)
	{
		$data = array ('title' => 'Kartu User',
						'user' => $this->M_user->detail($id_user)
					);
		$this->load->view('admin/user/print',$data, FALSE);
	}

	public function pdf()
	{
		$data['user']=$this->User_model->data();
		$nama_dokumen = "data_user";
		
		// Define a Landscape page size/format by name
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
		$mpdf->setFooter('{PAGENO}');
		//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
		
		$html = $this->load->view('admin/user/pdf.php',$data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output($nama_dokumen.".pdf",'I');
		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/Admin/User.php */