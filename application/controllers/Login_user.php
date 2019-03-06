<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	function __construct()
			{
				parent:: __construct();
				$this->load->model('Login_user_m');
				$this->load->model('Produk_m');
				$this->load->helper('url');
			} 

	public function index()
	{
		$this->load->view('Login_v');
	}

	
	// public function cek_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	$cek = $this->Login_m->cek_login("user",$where)->num_rows();
	// 	if($cek > 0){
	// 		$data_session = array(
	// 			'username' => $username,
	// 			'status' => "login"
	// 			);

	// 		$this->session->set_userdata($data_session);

	// 		redirect('Login_user');

	// 	}else{
	// 		$this->load->helper('url');
	// 		echo "<script type='text/javascript'>";
	// 		echo "alert ('Maaf Username atau Password Anda Salah !');";
	// 		echo "window.location.href = '".site_url('Login_user/index')."';";
	// 		echo "</script>";
	// 	}
	// }

	public function aksiLogin() {
		$u = $this->input->post('username');
		
		$this->session->set_userdata('username',$u);
		$this->session->userdata('username');
		
		$p = $this->input->post('password');
		
		$where=array('username'=>$u, 'password'=>$p);
		
		$tbl='user';
		
		$data['tampil']=$this->Login_user_m->ambilData($tbl,$where);
		
		$diijinin=false;
		foreach($data['tampil']->result() as $hsl){
			$nm=$hsl->name;
			$this->session->set_userdata('nama',$nm);
			$nama=$this->session->userdata('nama');
			$diijinin=true;
		}
		
		// $data['tampil_1']=$nama;
		
		
		if($diijinin==true){
			$data['produk']=$this->Produk_m->ambilData();
			$this->load->view('input_produk_v',$data);
		}
		else{
			$this->load->helper('url');
			echo "<script type='text/javascript'>";
			echo "alert ('Maaf Username atau Password Anda Salah !');";
			echo "window.location.href = '".site_url('Login_user')."';";
			echo "</script>";
		}
	}

	public function logout(){
			$this->session->sess_destroy();
			redirect();
		}	

	
}
