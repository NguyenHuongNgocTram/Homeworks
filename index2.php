<?php
//connect database
$server = "localhost";
$user = "root";
$pwd = "";
$dbName = "imagemanagement";
$db = new mysqli($server, $user, $pwd, $dbName);

if(isset($_FILES["fileUpload"])){
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	if ($_FILES["fileUpload"]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	$uploadOk = 0;
	}
	if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	} else {
		if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";
			$sql="insert into image values(null".","."""". basename( $_FILES["fileUpload"]["name"]) ."');" ;
        	$db->query($sql); 
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
$sql="select * from images;";
$kq=$db->query($sql)->fetch_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="fileUpload" id="fileUpload">
		<input type="submit" name="submit" value="Upload">
	</form>
	<form action="display.php" method="get" enctype="multipart/form-data">
		<button name="view">My Photos</button>
	</form>
</body>
</html>
