<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	public function data()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id_user','desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_user)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user',$id_user);
		$this->db->order_by('id_user','desc');
		$query = $this->db->get();
		return $query->row();
	}

	//tambah
	public function tambah($data)
	{
		$this->db->insert('users',$data);
		
	}
	//edit
	public function edit($data)
	{
		$this->db->where('id_user',$data['id_user']);
		$this->db->update('users',$data);
		
	}
	//delete
	public function delete($data)
	{
		$this->db->where('id_user',$data['id_user']);
		$this->db->delete('users',$data);
		
	}

	public function login($username,$password,$level)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('username'	=>	$username,
								'password'	=> sha1($password),
								'level'			=> $level
							));
		$query = $this->db->get();
		return $query->row();

	}


}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */