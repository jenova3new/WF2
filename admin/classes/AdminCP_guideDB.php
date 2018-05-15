<?php
	class guideDB{
		private $host = DB_HOSTNAME;
		private $user = DB_USERNAME;
		private $pass = DB_PASSWORD;
		private $name = DB_NAME;
		
		public $db;
		
		public function __construct(){
			$this->db = new mysqli($this->host,$this->user,$this->pass,$this->name); /*private sebenarnya tidak perlu, DB_HOSTNAME,dll sebenarnya bisa langsund dimasukan disini dan kodingan akan lebih pendek*/
		}
		public function getDaftarTabelGuide(){
			$daftar = $this->db->query("SELECT * FROM guide_post2");
			
			return $daftar;
		}
	}
?>