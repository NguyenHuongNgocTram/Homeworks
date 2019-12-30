<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$dbName = "imagemanagement";
	$db = new mysqli($server, $user, $pwd, $dbName);
		$sql = "SELECT * from images";
		$result = $db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="display: flex">
		<?php
		for ($i=0; $i < count($result) ; $i++) {
			echo "<img src= uploads/".$result[$i][1].">";
		}
		?>
	</div>
</body>
</html>
