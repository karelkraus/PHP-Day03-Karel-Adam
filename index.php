<?php include('action/db_connect.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Restaurant</title>
</head>
<body>
  <button type="button" href="create.php"><a href="create.php"> Add Meal</a></button> 
<?php 
$sql="SELECT * from meal";
$result=$conn->query($sql);
if($result->num_rows > 0){
$rows=$result->fetch_all(MYSQLI_ASSOC);
foreach($rows as $value ){
    
    echo"<div class='card' style='width: 18rem;'>
  <img src='".$value['img']."' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>".$value['name']."</h5>
    <h5 class='card-title'>".$value['price']."</h5>
    <h5 class='card-title'>".$value['ingredients']."</h5>
    <p class='card-text'>".$value['allergens']."</p>
    <a href='update.php?id=".$value['id']."' class='btn btn-primary'>Update</a>
    <a href='delete.php?id=".$value['id']."' class='btn btn-primary'>Delete</a>
  </div>
</div>";
}
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>