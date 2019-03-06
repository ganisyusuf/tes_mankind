<?php
	
	class Login_user_m extends CI_Model
	{
		public function ambilData($tbl, $where=null){
		if($where){
		$this->db->where($where);
		}
		return $this->db->get($tbl);
		}


	}
?>