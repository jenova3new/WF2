<?php 
include("configs/config_db.php");
include("classes/AdminCP_guideDB.php");
include("classes/AdminCP_Dex_Pass.php");

if(isset($_POST["username"]) OR isset($_POST["password"])){
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	$user = new pengguna($username,$password);
	
	if($user->login() === FALSE){
		header("location:login.php?login_error");
	}
	else{
		session_start();
		
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
		
		//$SESSION["username"] = $username;
		//$SESSION["password"] = $password;

		
		header("location:index.php");
		
		//switch(strtolower($user->login())){
		//	case "Administrator"				:	header("location:index.php"); 	break;
		//	case "Sub-Administrator"			:	header("location:index.php"); 	break;
		//	case "Owner"						:	header("location:index.php"); 	break;
		
	}
}
?>
