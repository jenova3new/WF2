<?php
//sesi login

	session_start();

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the CP area, " . $_SESSION['username'] . "!";
} else {
    header("Location: login.php");
}
	
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>

<body>

<div class="content">
	
	<header>
	<img src="Percobaan_files/world_box.png">
	</header>


	<div class="menu">
		<ul>
            <li><a href="../index.php?page=story">Cek Page</a> |</li> 
			<li><a href="index.php?page=list_guide">List Guide</a>|</li> 
			<li><a href="index.php?page=add_guide">Add or edit List Guide</a>|</li>
			<li><a href="logout.php">logout</a>|</li>
		</ul>
	</div>
	<div class="badan">
 <!-- Untuk opsi menu bar-->
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'list_guide':
				include "pages/list_guide.php";
				break;
			case 'add_guide':
				include "pages/add_guide.php";
				break;		
			case 'mod_guide':
				header("pages/mod_guide");
				break;	
			case 'del_guide':
				header("pages/del_guide");
				break;				
			default:
				echo "<center><h3>Maaf. Halaman belum dibuat !</h3></center>";
                break;
            }
    }
    else{
		include "pages/list_guide.php";
	}?>
	</div>

</div>


</body>
</html>>