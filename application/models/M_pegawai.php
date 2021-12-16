<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

	public function data()
	{
			$this->db->select('*');
			$this->db->from('tbl_data_pegawai058');
			$this->db->order_by('id_pegawai058','desc');
			$query = $this->db->get();
			return $query->result();
	}

	public function detail($id_pegawai058)
	{
		$this->db->select('*');
		$this->db->from('tbl_data_pegawai058');
		$this->db->where('id_pegawai058',$id_pegawai058);
		$query = $this->db->get();
		return $query->row();
	}

	//tambah
	public function tambah($data)
	{
		$this->db->insert('tbl_data_pegawai058',$data);
		
	}
	//edit
	public function edit($data)
	{
		$this->db->where('id_pegawai058',$data['id_pegawai058']);
		$this->db->update('tbl_data_pegawai058',$data);
		
	}
	//delete
	public function delete($data)
	{
		$this->db->where('id_pegawai058',$data['id_pegawai058']);
		$this->db->delete('tbl_data_pegawai058',$data);
		
	}



}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */