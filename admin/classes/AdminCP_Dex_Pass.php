<?php
	class pengguna{
		private $username;
		private $password;
		protected $db;
	
	public function __construct($user,$pass){
	$this->username = $user;
	$this->password = $pass;

			$guideDB = new guideDB;			
			$this->db = $guideDB->db;
	}




	public function login(){

	$get = $this ->db->query	("SELECT *
					FROM user
					JOIN peran_user ON peran_user.kode_peran = user.kode_peran
					WHERE username = '".$this->username." '
					AND password = '".$this->password."'");

	if($this->db->affected_rows == 0){
		return FALSE;

	}
	else{
		$hasil = $get->fetch_assoc();
		return $hasil["nama_peran"];
	}
	}
	}
?>