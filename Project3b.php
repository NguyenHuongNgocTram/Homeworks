<?php
session_start();
if ($_SESSION["UserNames"] == $UserName && $_SESSION["Passwords"] == $Passwords ) {
			echo $_SESSION["UserName"];
			echo $_SESSION["Passwords"];
		} 
 ?>
