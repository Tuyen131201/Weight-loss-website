<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giamcan";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$thucpham_id =  $_POST['thucpham_id'];

$sql = "UPDATE thucpham set thucpham_ten = '".$_POST['thucpham_ten']."', thucpham_calo = '".$_POST['thucpham_calo']."', donvitinh = '".$_POST['donvitinh']."'";
$sql = $sql. " WHERE thucpham_id='".$thucpham_id."'";
if ($conn->query($sql) == TRUE) {
  header('Location: thucpham.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

