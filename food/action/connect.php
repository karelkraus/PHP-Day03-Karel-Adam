<?php 

$servername = "127.0.0.1";
$username = "root";
$pw = "";
$db = "food";

$conn = new  mysqli($servername, $username, $pw, $db);

if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

?>