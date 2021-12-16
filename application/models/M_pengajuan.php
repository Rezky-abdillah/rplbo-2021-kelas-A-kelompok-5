<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	public function data()
	{
		$this->db->select('*');
		$this->db->from('pengajuan_surat');
		$this->db->order_by('id_pengajuan','desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_user)
	{
		$this->db->select('*');
		$this->db->from('tbl_user058');
		$this->db->where('id_user058',$id_user);
		$this->db->order_by('id_user058','desc');
		$query = $this->db->get();
		return $query->row();
	}

	//tambah
	public function tambah($data)
	{
		$this->db->insert('pengajuan_surat',$data);
		
	}
	//edit
	public function edit($data)
	{
		$this->db->where('id_user058',$data['id_user058']);
		$this->db->update('tbl_user058',$data);
		
	}
	//delete
	public function delete($data)
	{
		$this->db->where('id_user058',$data['id_user058']);
		$this->db->delete('tbl_user058',$data);
		
	}

	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('tbl_user058');
		$this->db->where(array('username058'	=>	$username,
								'password058'	=> sha1($password)
							));
		$query = $this->db->get();
		return $query->row();

	}


}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */