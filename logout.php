<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["user_type"]);
	unset($_SESSION["login"]);
	unset($_SESSION["hall"]);
	unset($_SESSION["username"]);
	unset($_SESSION["contact"]);
	header("Location:index.php")
?>