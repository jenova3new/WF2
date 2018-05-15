<?php
	class Barang{
		private $id;
		private $db;
	
		public function __construct($id = null){
			$this->id = $id; 
			
			$database = new Database;			
			$this->db = $database->db;
		}

		public function daftarKategori(){
			
		$daftar = $this->db->query("SELECT * FROM kategori_barang");
		return ($this->db->affected_rows > 0) ? $daftar : FALSE;
		}
	}
?>