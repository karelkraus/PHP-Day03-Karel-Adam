<?php include('action/connect.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
		$sql = "SELECT * FROM meal";
		$result = $conn->query($sql);

		if($result->num_rows > 0) {
			$rows= $result -> fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $value) {
				echo "<div class='container'>
						<div class='imgBox'>
						 <img src='".$value['image']."'>
						 <img src='".$value['image']."'>
						 <img src='".$value['image']."'>
						</div>
						<h2>".$value['name']."</h2>
						<div class='skew'><p>Price:".$value['price']."</p> 
						<p>Ingredients: ".$value['ingredients']."</p> <p>Allergens: ".$value['allergens']."</p>
						<a>Edit</a><a>Delete</a>
						</div>
					</div>";
			}
		}


	 ?>

</body>
</html>