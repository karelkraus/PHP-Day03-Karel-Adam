<?php  
	include('action/db_connect.php');

	if ($_GET['id']) {
   	$id = $_GET['id'];

   	$sql= "SELECT * FROM meal WHERE id = {$id}";
   	$result = $conn->query($sql);

	$meal = $result->fetch_assoc();

	$conn->close();


}


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="action/a_update.php" method="post">
		<input type="hidden" value="<?php echo $meal['id'] ?>" name="id">
		<input type="text" value="<?php echo $meal['name'] ?>" name="name">
		<input type="text" value="<?php echo $meal['img'] ?>" name="img">
		<input type="text" value="<?php echo $meal['price'] ?>" name="price">
		<input type="text" value="<?php echo $meal['ingredients'] ?>" name="ings">
		<input type="text" value="<?php echo $meal['allergens'] ?>" name="alls">
		<input type="submit" value="Update">
	</form>
	<a href="index.php">Back to main page</a>


</body>
</html>