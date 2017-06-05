<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_mod extends CI_Model {

	public function get()
	{
		$get = $this->db->get('table_buku');
		return $get->result_array();
	}
	public function get_code($kode)
	{
		return $this->db->get_where('table_buku',array('kode_buku' =>$kode))->row();
	}
	public function add($tambah)
	{
		return $this->db->insert('table_buku', $tambah);
	}
	public function delete($kode)
	{
		$this->db->where('kode_buku', $kode);
		return $this->db->delete('table_buku');
	}
	public function edit($kode,$edit)
	{
		$this->db->where('kode_buku', $kode);
		return $this->db->update('table_buku', $edit);
	}
}

/* End of file buku_mod.php */
/* Location: ./application/models/buku_mod.php */ ?>