<?php
	if(isset($_POST["login"])){
		$_SESSION["UserName"]=$_POST["UserName"];
		$_SESSION["Passwords"]=$_POST["Passwords"];
		if ($_SESSION["UserName"] == $UserName && $_SESSION["Passwords"] == $Passwords) {
			header("location:Project1/Project1a.php");
			echo "đăng Nhập thành công ";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Projectfinal.php" method="post">
		<h1>Login</h1>
		<label>UserName</label>
		<input type="text" name="UserName">
		<label>Password</label>
		<input type="password" name="Passwords">
		<button name="login">LOGIN</button>
	</form>

</body>
</html>