<?php
	
	class Transaksi_masuk_m extends CI_Model
	{
		public function insert($data){
			$this->db->insert('transaksi',$data);
		}
		public function ambilData(){
			$sql = "select * from transaksi as p inner join produk as j on j.kode_produk = p.kode_produk where status = 1";
			return $this->db->query($sql);
		}
		public function ambilDataProduk(){
			$sql = "select * from produk";
			return $this->db->query($sql);
		}
		public function ambilData2($id){
			$sql = "select * from transaksi as p inner join produk as j on j.kode_produk = p.kode_produk where kode_produk = '".$kode_produk."'";
			return $this->db->query($sql);
		}

		public function transaksi(){
			$sql = "SELECT * FROM transaksi";
			return $this->db->query($sql);
		}
	}
?>