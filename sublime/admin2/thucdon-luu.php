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


$sql = "INSERT INTO thucdon (thucdon_id, buoi,  tongcalo, thucpham_id, tv_email) VALUES ('".$_POST["thucdon_id"] ."','".$_POST["buoi"] ."','".$_POST["tongcalo"] ."','".$_POST["thucpham_ten"] ."','".$_POST["tv_email"] ."')";


if ($conn->query($sql) == TRUE) {
  echo "Them thực đơn thành công";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: thucdon.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
