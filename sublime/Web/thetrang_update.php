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


$sql = "INSERT INTO thetrang (thetrang_id, height, weight,ngay, tv_email) VALUES ('".$_POST["thetrang_id"] ."','".$_POST["height"] ."','".$_POST["weight"] ."','".$_POST["ngay"] ."','".$_COOKIE["tv_email"]."')";



if ($conn->query($sql) == TRUE) {
  echo "Cập nhật thể trạng thành công";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: thetrang.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
