<?php 
include("configs/config_db.php");
include("classes/AdminCP_List_dis.php");
include("classes/AdminCP_guideDB.php");
$db				= new guideDB;
//$db->tambahPeranPenguna('I','Ilustrasi');//
$guideDB	= $db->getDaftarTabelGuide();
$listdb			= new guideDB;


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
					<td width="150" background="./Percobaan_files/image/Layout_Target_Actor.png"><center><h><img src="Percobaan_files/coin_01.png" width="20" height="20"><?php echo $peran["point"] ?></h><input type="image" src="Percobaan_files/buy_box.png" border="0" onclick="submitorder001()"/></center></td><?php echo"
					</tr>
			<br />";
	} ?>
</table>
</body>

</table>