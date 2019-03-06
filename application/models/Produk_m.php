<?php
	
	class Produk_m extends CI_Model
	{
		public function insert($data){
			$this->db->insert('produk',$data);
		}
		public function ambilData(){
			$sql = "select * from produk as p inner join jenis as j on j.kode_jenis = p.kode_jenis";
			return $this->db->query($sql);
		}
		public function ambilData2($kode_produk){
			$sql = "select * from produk as p inner join jenis as j on j.kode_jenis = p.kode_jenis where kode_produk = '".$kode_produk."'";
			return $this->db->query($sql);
		}
		public function update_produk($kode_produk, $data){
			$this->db->where('kode_produk',$kode_produk);
			$this->db->update('produk',$data);
		}
		public function delete_produk($kode_produk){
			$this->db->where('kode_produk',$kode_produk);
			$this->db->delete('produk');
		}

		public function jenis(){
			$sql = "SELECT * FROM jenis";
			return $this->db->query($sql);
		}
	}
?>