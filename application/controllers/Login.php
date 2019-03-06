<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
			{
				parent:: __construct();
				$this->load->model('Login_m');
				$this->load->helper('url');
			} 

	public function index()
	{
		$data['jenis']=$this->Login_m->ambilData();
		$this->load->view('jenis_produk_v',$data);
	}

	public function tambah_jenis(){
		$data = array('kode_jenis' => $this->input->post('kode_jenis'),
		'nama_jenis' => $this->input->post('nama_jenis'));

		$this->Login_m->insert($data);
		redirect('Login');

	}

	public function ubah_jenis(){
		$kode_jenis = $this->uri->segment(3);
		$data['jenis']=$this->Login_m->ambilData2($kode_jenis);
		$this->load->view('ubah_jenis_produk_v',$data);
	}

	public function update_jenis(){
		$kode_jenis = $this->input->post('kode_jenis');
		$data = array('nama_jenis' => $this->input->post('nama_jenis'));

		$this->Login_m->update_jenis($kode_jenis, $data);
		redirect('Login');
	}

	public function hapus_jenis(){
		$kode_jenis = $this->uri->segment(3);
		$nama = $this->uri->segment(4);
		$this->Login_m->delete_jenis($kode_jenis);
		redirect('Login');
	}
	
}
