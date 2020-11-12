<?php 


ob_start();
session_start();
include('action/db_connect.php');

if (isset($_SESSION['user'])!="") {
	header("Location: home.php");
	exit;
}

$error = false;

if (isset($_POST['btn-login'])) {

	$email = trim($_POST['email']);
	$email = strip_tags($email);
 	$email = htmlspecialchars($email);

 	$pass = trim($_POST[ 'pass']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);

	if(empty($email)) {
		$error = true;
  		$emailError = "Please enter your email address.";
	}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
  		$emailError = "Please enter valid email address.";
	}


	if(empty($pass)) {
		$error = true;
  		$passError = "Please enter your password." ;
	}

	if (!$error) {
		$password = hash( 'sha256', $pass);

		$res=mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'" );
		$row=mysqli_fetch_array($res, MYSQLI_ASSOC);
		$count = mysqli_num_rows($res);


		if($count == 1 && $row['userPass']==$password) {
			$_SESSION['user'] = $row['userId'];
			header("Location: home.php");
		}else {
			$errMSG = "Incorrect Credentials, Try again..." ;
		}
	} 
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
		

		<h2>SIGN IN</h2>
		<hr>

		<?php  
		if (isset($errMSG)) {
			echo $errMSG;
		}


		?>

		<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>"  maxlength="40">

		<span class="text-danger"><?php  echo $emailError; ?></span>

		<input type="password" name="pass"  class="form-control" placeholder="Your Password" maxlength="15">

		<span class="text-danger"><?php  echo $passError; ?></span>

		<hr>

		<button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>

		<hr>

		<a href="registration.php">Sign Up Here</a>


	</form>
	</div>

</body>
</html>

<?php ob_end_flush(); ?>