<?php 
include("configs/config_db.php");
include("classes/AdminCP_guideDB.php");
include("classes/AdminCP_List_add.php");
$db				= new guideDB;

$guideDB	= $db->getDaftarTabelGuide();
$addlistdb			= new guidelistadd;


		$dellist = $_GET['id'];
		if($addlistdb->HapusDaftar($dellist));										   	
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>