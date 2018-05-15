<?php 
include("configs/config_db.php");
include("classes/AdminCP_guideDB.php");
include("classes/AdminCP_List_add.php");
$db				= new guideDB;
//$db->tambahPeranPenguna('I','Ilustrasi');//
$guideDB	= $db->getDaftarTabelGuide();
$addlistdb			= new guidelistadd;


?>

<body>

<?php
if(isset($_POST['ubah'])){
		$Modlist1 = $_POST['link_gambar'];
		$Modlist2 = $_POST['point'];
		$Modlist3 = $_POST['nama'];
		$Modlist4 = $_POST['informasi'];
		$Modlist5 = $_POST['url'];
		$idlist = $_GET['id'];
		if($addlistdb->UbahDaftar($Modlist1, $Modlist2, $Modlist3, $Modlist4, $Modlist5, $idlist)) 	echo "<p>Data berhasil dirubah";
		else								   													echo "<p>Data gagal dirubah";
	}
	
	
	echo"<form method='POST'>
		 Link Gambar : harus Disertai ekstensi file ,contoh : Actor_8.png <input type='text' name='link_gambar'/><br />
		 Point :<input type='text' name='point'/><br />
		 Nama :<input type='text' name='nama'/><br />
		 Informasi :<input type='text' name='informasi'/><br />
		 Link Tautan :<input type='text' name='url'/><br />
		 <center><input type='submit' name='ubah'/></center>
		 </form>";
?>