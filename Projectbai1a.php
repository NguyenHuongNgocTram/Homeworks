<?php
	session_start();
	if (isset($_SESSION["UserName"]) && isset($_SESSION["Passwords"])) {
			echo $_SESSION["UserName"];
			echo $_SESSION["Passwords"];
		} 
?>