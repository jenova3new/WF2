<?php
	class guidelistadd{
		private $id;
		private $db;
	
		public function __construct($id = null){
			$this->id = $id; 
			
			$guideDB = new guideDB;			
			$this->db = $guideDB->db;
		}
		public function tambahDaftar($Addlist1, $Addlist2, $Addlist3, $Addlist4, $Addlist5){
				return $this->db->query("INSERT INTO guide_post2 ( link_gambar, point, nama, informasi, link_arah ) VALUES ('${Addlist1}','${Addlist2}','${Addlist3}','${Addlist4}','${Addlist5}');");
		}
		public function HapusDaftar($dellist){
		return $this->db->query("DELETE FROM guide_post2 WHERE id_post=${dellist};");
		}
		public function UbahDaftar($Modlist1, $Modlist2, $Modlist3, $Modlist4, $Modlist5, $idlist){
		return $this->db->query("UPDATE guide_post2 SET link_gambar='${Modlist1}', point='${Modlist2}', nama='${Modlist3}', informasi='${Modlist4}', link_arah='${Modlist5}' WHERE id_post = ${idlist};");
		}
		public function getDaftarTabelGuide(){
		$daftar = $this->db->query("SELECT * FROM guide_post2");
			
		return $daftar;
		}
	}
?>