<?php 
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($localhost, $username, $password, $dbname);

if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} 
?>