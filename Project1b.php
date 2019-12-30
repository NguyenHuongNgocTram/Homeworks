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
		if ($_SESSION["UserName"]==$UserName && $_SESSION["Passwords"] ==$Passwords) {
			header("location:Project2b/Project2b.php");
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