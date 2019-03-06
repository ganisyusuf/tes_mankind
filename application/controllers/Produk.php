<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct()
			{
				parent:: __construct();
				$this->load->model('Login_m');
				$this->load->model('Produk_m');
				$this->load->helper('url');
			} 

	public function index()
	{
		$data['produk']=$this->Produk_m->ambilData();
		$this->load->view('input_produk_v',$data);
	}

	public function tambah_produk(){
		$data = array('kode_jenis' => $this->input->post('kode_jenis'),
		'type_produk' => $this->input->post('type_produk'),
		'kode_produk' => $this->input->post('kode_produk'),
		'nama_produk' => $this->input->post('nama_produk'),
		'stok' => $this->input->post('stok'),
		'harga' => $this->input->post('harga'));

		$this->Produk_m->insert($data);
		redirect('Produk');

	}

	public function ubah_produk(){
		$kode_produk = $this->uri->segment(3);
		$data['produk']=$this->Produk_m->ambilData2($kode_produk);
		$this->load->view('ubah_produk_v',$data);
	}

	public function update_produk(){
		$kode_produk = $this->input->post('kode_produk');
		$data = array('kode_jenis' => $this->input->post('kode_jenis'), 
						'type_produk' => $this->input->post('type_produk'),
						'nama_produk' => $this->input->post('nama_produk'),
						'stok' => $this->input->post('stok'),
						'harga' => $this->input->post('harga'));

		$this->Produk_m->update_produk($kode_produk, $data);
		redirect('Produk');
	}

	public function hapus_produk(){
		$kode_produk = $this->uri->segment(3);
		$nama = $this->uri->segment(4);
		$this->Produk_m->delete_produk($kode_produk);
		redirect('Produk');
	}
	
}
