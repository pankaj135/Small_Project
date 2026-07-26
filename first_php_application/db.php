<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first_application";

$id=$_GET['id'];

$name=$_GET['name'];

$email=$_GET['email'];

$phone_no=$_GET['phone_no'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO user_data (id, name, email, phone_no)
VALUES ($id, '$name', '$email', $phone_no)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>