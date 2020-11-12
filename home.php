<?php 


ob_start();
session_start();
include('action/db_connect.php');

if (!isset($_SESSION['user'])) {
	header("Location: registration.php");
	exit;
}

$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Hi <?php echo $userRow['userEmail' ]; ?>

	<a  href="logout.php?logout">Sign Out</a>

</body>
</html>
<?php ob_end_flush(); ?>