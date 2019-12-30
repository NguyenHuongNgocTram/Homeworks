<?php
session_start();
if ($_SESSION["UserNames"] ==$resuilt[1][1] && $_SESSION["Passwords"] ==$resuilt[1][2] ) {
			echo $_SESSION["UserName"];
			echo $_SESSION["Passwords"];
		} 
 ?>
