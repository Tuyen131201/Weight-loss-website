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


$sql = "INSERT INTO thucpham (thucpham_id, thucpham_ten, thucpham_calo, donvitinh, tv_email) VALUES ('".$_POST["thucpham_id"] ."','".$_POST["thucpham_ten"] ."','".$_POST["thucpham_calo"] ."','".$_POST["donvitinh"] ."','".$_POST["tv_email"] ."')";


if ($conn->query($sql) == TRUE) {
  echo "Them món ăn thành công";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: thucpham.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
