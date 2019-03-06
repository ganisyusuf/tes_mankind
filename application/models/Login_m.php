<?php
	
	class Login_m extends CI_Model
	{
		public function insert($data){
			$this->db->insert('jenis',$data);
		}
		public function ambilData(){
			$sql = "select * from jenis";
			return $this->db->query($sql);
		}
		public function ambilData2($kode_jenis){
			$sql = "select * from jenis where kode_jenis = '".$kode_jenis."'";
			return $this->db->query($sql);
		}
		public function update_jenis($kode_jenis, $data){
			$this->db->where('kode_jenis',$kode_jenis);
			$this->db->update('jenis',$data);
		}
		public function delete_jenis($kode_jenis){
			$this->db->where('kode_jenis',$kode_jenis);
			$this->db->delete('jenis');
		}
		// function cek_login($table,$where){
		// 	return $this->db->get_where($table,$where);
		// }

		
	}
?>