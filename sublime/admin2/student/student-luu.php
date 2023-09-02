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

$date = date_create($_POST["ngaysinh"]);

$sql = "INSERT INTO hocvien (TenHV, gioitinh, ngaysinh,sdt,diachi,IDkhoahoc,tenkhoahoc) 
            VALUES ('".$_POST["TenHV"] ."', '".$_POST["gioitinh"] ."', '".$date ->format('Y-m-d') ."', '".$_POST["sdt"] ."', '".$_POST["diachi"] ."', NULL, NULL)";

if ($conn->query($sql) == TRUE) {
  echo "Them sinh vien thanh cong";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: student.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

