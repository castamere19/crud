<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_mod');
	}

	public function index()
	{
		$data['isinya'] = $this->buku_mod->get();
		$this->load->view('welcome_message',$data);
	}
	public function tambahform()
	{
		$this->load->view('tambah');
	}
	public function tambah()
	{
		$tambah = array(
			'kode_buku' => $this->input->post('kode'),
			'judul' => $this->input->post('judul'),
			'penulis' => $this->input->post('penulis'),
			'penerbit' => $this->input->post('penerbit'),
			'harga' =>$this->input->post('harga'), 
			);
		$this->buku_mod->add($tambah);
		redirect('welcome','refresh');
	}
	public function hapus($kode)
	{
		$this->buku_mod->delete($kode);
		redirect('welcome','refresh');
	}
	public function editform($kode)
	{
		$data['dt'] = $this->buku_mod->get_code($kode);
		$this->load->view('edit', $data);
	}
	public function edit($kode)
	{
		$edit = array(
			'kode_buku' => $this->input->post('kode'),
			'judul' => $this->input->post('judul'),
			'penulis' => $this->input->post('penulis'),
			'penerbit' => $this->input->post('penerbit'),
			'harga' =>$this->input->post('harga'), 
			);
		$this->buku_mod->edit($kode,$edit);
		redirect('welcome','refresh');
	}
}
