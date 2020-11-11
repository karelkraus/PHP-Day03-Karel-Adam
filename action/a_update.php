<?php 

include("db_connect.php");

if($_POST){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $ings=$_POST['ings'];
    $alls=$_POST['alls'];
    $img=$_POST['img'];
    $id = $_POST['id'];
    $empty="false";

    if(isset($_POST['submit'])){
        if(empty($name) || empty($price)|| empty($alls)||empty($ings) || empty($img)){
            $empty="true";
        }
}

if($empty==="false"){
    $sql="UPDATE `meal` SET `name`='$name',`img`='$img',`price`='$price',`ingredients`='$ings',`allergens`='$alls' WHERE id='{$id}'";
    if($conn->query($sql)=== TRUE){
        echo"<p>Success updated</p>";
        echo"<button ><a href='../create.php'>Back</a></button>";
        echo"<button><a href='../index.php'>Home</a></button>";
    }else{
        echo"Error" .$sql. ' '. $conn->connect_error;
    }
    
}else{
    echo"Please fill all fields";
    echo"<button ><a href='../create.php'>Back</a></button>";
    echo"<button><a href='../index.php'>Home</a></button>";
}

   

}
$conn->close();

?>