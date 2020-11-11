<?php 

include("db_connect.php");

if($_POST){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $ings=$_POST['ings'];
    $alls=$_POST['alls'];
    $img=$_POST['img'];
    $empty="false";

    if(isset($_POST['submit'])){
        if(empty($name) || empty($price)|| empty($alls)||empty($ings) || empty($img)){
            $empty="true";
        }
}

if($empty==="false"){
    $sql="INSERT INTO `meal`(`name`, `img`, `price`, `ingredients`, `allergens`) VALUES ('$name','$img','$price','$ings','$alls')";
    if($conn->query($sql)=== TRUE){
        echo"<p>New record has been created</p>";
        echo"<button ><a href='../create.php'>Back</a></button>";
        echo"<button><a href='../index.php'>Home</a></button>";
    }else{
        echo"Error" .$sql. ' '. $conn->connect_error;
    }
    $conn->close();
}else{
    echo"Please fill all fields";
    echo"<button ><a href='../create.php'>Back</a></button>";
    echo"<button><a href='../index.php'>Home</a></button>";
}

   

}


?>