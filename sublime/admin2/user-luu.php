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



$sql = "INSERT INTO thanhvien (tv_email,tv_hoten,tv_password,tv_sdt, tv_diachi, user_type) 
        VALUES ('".$_POST["tv_email"] ."','".$_POST["tv_hoten"] ."', '".$_POST["tv_password"] ."', '".$_POST["tv_sdt"] ."'
        , '".$_POST["tv_diachi"] ."' , '".$_POST["user_type"] ."')";

if ($conn->query($sql) == TRUE) {
  echo "Them tài khoản thanh cong";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: user_index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
