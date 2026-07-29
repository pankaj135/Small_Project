<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cm";

$id=$_GET['id'];

$subject=$_GET['subject'];
$marks=$_GET['marks'];



// Create connection
    $conn = mysqli_connect($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO add_marks (id, subject,marks)
VALUES ($id, '$subject',$marks) ";

// echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>