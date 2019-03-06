<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_masuk extends CI_Controller {

	function __construct()
			{
				parent:: __construct();
				$this->load->model('Login_m');
				$this->load->model('Produk_m');
				$this->load->model('Transaksi_masuk_m');
				$this->load->helper('url');
			} 

	public function index()
	{
		$data['masuk']=$this->Transaksi_masuk_m->ambilData();
		$this->load->view('entry_produk_masuk_v',$data);
	}

	public function tambah_masuk(){


		$sql1 = "select * from produk where kode_produk = '".$this->input->post('kode_produk')."'";
		foreach ($this->db->query($sql1)->result() as $key):
			$stock = $key->stok + $this->input->post('qty');
		endforeach;
		
		$sql = "UPDATE  produk SET stok = ".$stock." WHERE kode_produk = '".$this->input->post('kode_produk')."'";
		$this->db->query($sql);

		$data = array('id' => $this->input->post('id'),
		'kode_produk' => $this->input->post('kode_produk'),
		'qty' => $this->input->post('qty'),
		'tanggal' => $this->input->post('tanggal'),
		'status' => 1,
		'stock_new' => $stock);
	
		$this->Transaksi_masuk_m->insert($data);
		redirect('Transaksi_masuk');

	}

}
