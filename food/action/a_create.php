<?php 

include('../action/connect.php'); 
	if ($_POST) {
	   $name = $_POST['name'];
	   $image = $_POST['image'];
	   $price = $_POST[ 'price'];
	   $ingredients = $_POST[ 'ingredients'];
	   $allergens = $_POST[ 'allergens'];

   $sql = "INSERT INTO `meal`(`name`, `image`, `price`, `ingredients`, `allergens`) VALUES ('$name','$image','$price','$ingredients','$allergens')";


   if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }




   $conn->close();
}



?>