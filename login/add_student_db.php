<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cm";

$id=$_GET['id'];

$name=$_GET['name'];
$phone_no=$_GET['phone_no'];

$email=$_GET['email'];
$branch=$_GET['branch'];
$sem=$_GET['sem'];


// Create connection
    $conn = mysqli_connect($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO add_student (id, name,phone_no,email,branch,sem)
VALUES ($id, '$name', $phone_no, '$email','$branch',$sem) ";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>