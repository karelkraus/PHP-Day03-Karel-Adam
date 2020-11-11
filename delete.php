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

 	<form action="action/a_delete.php" method="post">
 		<input type="hidden" value="<?php echo $meal['id'] ?>" name="id">
 		<input type="submit" value="Yes">
 		<a href="index.php">No, go back</a>
 	</form>
 
 </body>
 </html>