<?php 
include("configs/config_db.php");
include("classes/AdminCP_guideDB.php");
include("classes/AdminCP_List_add.php");
$db				= new guideDB;
//$db->tambahPeranPenguna('I','Ilustrasi');//
$guideDB	= $db->getDaftarTabelGuide();
$addlistdb			= new guidelistadd;


?>
<script src="js/submitorder.js" type="text/javascript"></script>
 <style>
 h{font-family : monotype corsiva;
	font-size: 20px;
	color: white;
   -webkit-text-stroke-width: 0px;
   -webkit-text-stroke-color: white;
   text-shadow:
    -1px -1px 0 #000,  
     1px -1px 0 #000,
    -1px  1px 0 #000,
     1px  1px 0 #000;
}
</style>
<body>

<?php
if(isset($_POST['tambah'])){
	
		$file 			= $_FILES["berkas"];
	
		$nama			= $file["name"];
		$pos_sementara	= $file["tmp_name"];
		$jenis			= $file["type"];
		$ukuran			= $file["size"];
	
		$pos_akhir = "Percobaan_files/".$nama;
	
			if($ukuran < 2097152 | $jenis ="image/*/"){
		
	
			copy($pos_sementara,$pos_akhir);
	
			$Addlist1 = $nama;
			$Addlist2 = $_POST['point'];
			$Addlist3 = $_POST['nama'];
			$Addlist4 = $_POST['informasi'];
			$Addlist5 = $_POST['url'];
			if($addlistdb->tambahDaftar($Addlist1, $Addlist2, $Addlist3, $Addlist4, $Addlist5)) 	echo "<p>Data baru berhasil ditambahkan";
		
		else																						echo "Ukuran File terlalu Besar";
		}
		else								   													echo "<p>Data baru gagal ditambahkan";
		echo "<meta http-equiv='refresh' content='0'>";
	}
	
	$getDaftarTabelGuide = $addlistdb->getDaftarTabelGuide();
	?><form method="post" enctype="multipart/form-data">
		Pilih Gambar : <input type="file" name="berkas" accept="image/*/"> Max File Size : 2MB<br /><?php
	echo"
		 
		 Point :<input type='text' name='point'/><br />
		 Nama :<input type='text' name='nama'/><br />
		 Informasi :<input type='text' name='informasi'/><br />
		 Link Tautan :<input type='text' name='url'/><br />
		 <center><input type='submit' name='tambah'/></center>
		 </form>";
?>


<table border="0" cellpadding="0" cellspacing="2">
<tr align="center">
<td>ID</td><td>Gambar</td><td>Nama Konten</td><td>Rincian Konten</td><td>QC diperlukan</td>
</tr>
<?php
while($peran = $guideDB->fetch_array()){ ?>
			<tr align="center">
					<td width="100" background="./Percobaan_files/image/Layout_Target_Actor.png"><center><h><?php echo $peran["id_post"]?></h></center></td>
					<td width="150" height="150" background="./Percobaan_files/image/Layout_Target_Actor.png"> <a href="<?php echo $peran["link_arah"]?>"> <img src="Percobaan_files/<?php echo $peran["link_gambar"]?>" width="150" height="150"></a></td>
					<td width="150" background="./Percobaan_files/image/Layout_Target_Actor.png"><center><h><?php echo $peran["nama"]?></h></center></td>
					<td width="350" background="./Percobaan_files/image/Layout_Target_Actor.png"><center><h><?php echo $peran["informasi"]?></h></center></td>
					<td width="150" background="./Percobaan_files/image/Layout_Target_Actor.png"><center><h><img src="Percobaan_files/coin_01.png" width="20" height="20"><?php echo $peran["point"] ?></h><input type="image" src="Percobaan_files/buy_box.png" border="0" onclick="submitorder001()"/></center></td>
					<td widht="150" background="./Percobaan_files/image/Layout_Target_Actor.png">
							<a href="ubahdata.php?id=<?php echo $peran['id_post']?>"> UBAH </a></br>
							<a href="hapusdata.php?id=<?php echo $peran['id_post']?>"> HAPUS </a>
					</td>
					<?php echo"
					
					
					</tr>
			<br />";
	} ?>
</table>
</body>

</table>