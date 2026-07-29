<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cm";

$id=$_GET['id'];

$result=$_GET['result'];



// Create connection
    $conn = mysqli_connect($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO result (id, result)
VALUES ($id, '$result') ";

// echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>