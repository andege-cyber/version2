<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'version2');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connection error";
  }
  echo "Connected successfully";

/*if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create connection
$conn = mysqli_connect('localhost', 'root', '', 'version2');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
}*/
  
   // echo "Successful!";
//} else {
    //echo "Invalid request.";
?>