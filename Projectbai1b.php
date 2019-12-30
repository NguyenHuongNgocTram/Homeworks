<?php
session_start();
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
	<form action="Projectbai1a.php" method="post" style=" background-color: lightblue; margin-left: 200px;margin-right: 300px;">
		<div style="margin-left: 200px">
			<h1 style="color: red;"> Login</h1>
			<label style="font-size: 29px">UserName</label>
			<br>
			<input type="text" name="UserName" style="margin-top: 10px;">
			<br>
			<label style="font-size: 29px"style="margin-top: 10px;" >Password</label>
			<br>
			<input type="password" name="Passwords" style="margin-top: 10px;">
			<br>
			<button name="login" style="margin-top: 10px;">LOGIN</button>
		</div>
	</form>
</body>
</html>