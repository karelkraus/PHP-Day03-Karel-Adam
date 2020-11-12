<?php 
session_start();
if(!isset($_SESSION['user'])) {
	header("Location: registration.php");
}elseif (isset($_SESSION['user'])!="") {
	header("Location: home.php");
}


if (isset($_GET['logout'])) {
	unset($_SESSION['user']);
	session_unset();
	session_destroy();
	header("Location: registration.php");
	exit;
}

?>