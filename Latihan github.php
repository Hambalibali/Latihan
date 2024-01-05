<?php
$servername = "localhost";
$database = "u123456789_DatabaseName";
$username = "u123456789_User";
$password = "MyStr0ngPa$!";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>