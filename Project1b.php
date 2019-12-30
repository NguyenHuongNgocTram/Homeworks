<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbName = "usermanagement";
$db = new mysqli($server, $user, $pwd, $dbName);
$sql = "SELECT * FROM users;";
$resuilt = $db->query($sql)->fetch_all();

	class userss{
		public $maid;
		public $UserName;
		public $Passwords;
		public $fullname;

		function __construct($maid,$UserName,$Passwords,$fullname){
			$this->ma=$maid;
			$this->UserName=$UserName;
			$this->Passwords=$Passwords;
			$this->fullname=$fullname;
		}
	}
	$mangusers=[];
	for ($i=0; $i <count($resuilt); $i++) { 
		$users[$i] = new userss($resuilt[$i][0],$resuilt[$i][1],$resuilt[$i][2],$resuilt[$i][3]);
		array_push($mangusers,$users[$i]);
	}
	if(isset($_POST["login"])){
		$_SESSION["UserName"]=$_POST["UserName"];
		$_SESSION["Passwords"]=$_POST["Passwords"];
		if ($_SESSION["UserName"]== $UserName && $_SESSION["Passwords"] == $Passwords) {
			header("location:Project3b.php");
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
	<form action="Project1b.php" method="post" style=" background-color: lightblue; margin-left: 200px;margin-right: 300px;">
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
