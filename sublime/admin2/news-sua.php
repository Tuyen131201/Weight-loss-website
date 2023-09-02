<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giasu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id =  $_POST['tintucID'];

$sql = "UPDATE tintuc set tieude = '".$_POST['tieude']."', hinhanh = '".$_POST['hinhanh']."',noidung = '".$_POST['noidung']."'";
$sql = $sql. " WHERE tintucID='".$id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: news.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
