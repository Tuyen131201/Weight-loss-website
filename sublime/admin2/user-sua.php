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

$tv_email =  $_POST['tv_email'];

$sql = "UPDATE thanhvien set tv_hoten = '".$_POST['tv_hoten']."', tv_sdt = '".$_POST['tv_sdt']."', tv_diachi = '".$_POST['tv_diachi']."'";
$sql = $sql. " WHERE tv_email='".$tv_email."'";


if ($conn->query($sql) == TRUE) {
  header('Location: user_index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
