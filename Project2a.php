<?php
	if(isset($_POST["login"])){
		$_SESSION["userNames"]=$_POST["UserName"];
		$_SESSION["Passwords"]=$_POST["Passwords"];
		if ($_SESSION["userNames"] =="Admin" && $_SESSION["Passwords"] == "123") {
			header("location:Project1a.php");
			echo "đăng Nhập thành công ";
		}else{
			echo "Vui Lòng Thử Lại!!!!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Project2a.php" method="post">
		<h1>Login</h1>
		<label>UserName</label>
		<input type="text" name="UserName">
		<label>Password</label>
		<input type="password" name="Passwords">
		<button name="login">LOGIN</button>
	</form>

</body>
</html>
