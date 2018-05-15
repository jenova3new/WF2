<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Web Programming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
<!-- -->
<div class="content">
	<header>
	<center><img src="./pages/Percobaan_files/LogoWF.png" alt="" class="src"></a></center>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=story">Story</a></li>
			<li><a href="index.php?page=guide">Guide</a></li>
			<li><a href="admin/index.php?page=login">Login</a></li>
		</ul>
	</div>
	<div class="badan">
 <!-- Untuk opsi menu bar-->
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'story':
				include "pages/story.html";
				break;
			case 'guide':
				include "pages/dlc.html";
				break;		
			case 'login':
				header("admin/login.php"); /* Redirect browser */
				exit();

				break;							
			default:
				echo "<center><h3>Maaf. Halaman belum dibuat !</h3></center>";
                break;
            }
    }
    else{
		include "pages/story.html";
	}?>
	</div>

</div>

</body>
</html>>