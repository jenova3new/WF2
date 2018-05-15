<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<br/>
	<center><h2>Login</h2></center>
	<br/>
    <div class="login">
        <br/>
        <form method="post" action="proses_login.php" id="login-form">
            <?php if(isset($_GET["login_error"])){ ?>
            <h4 style="color: red; text-align: center;" >Username atau Password Salah</h4>
            <?php } ?>
                <br />
                <div class="input-group">
                <input type="text" name="username" value="" placeholder="Username" style="width: 430px;">
                </div>
                <div class="input-group">
                <input type="password" name="password" value="" placeholder="Password" style="width: 430px;">
                </div>
                <center><div class="input-group"><input type="submit" name="commit" value="Login" class="btn">
                </div></center>
        </form>
    </div>
</body>
</html>