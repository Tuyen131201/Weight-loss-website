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


$sql = "INSERT INTO hoatdong (bttd_id, bttd_ten, bttd_calo, tv_email, thoigian_calo) VALUES ('".$_POST["bttd_id"] ."','".$_POST["bttd_ten"] ."','".$_POST["bttd_calo"] ."','".$_POST["tv_email"] ."','".$_POST["thoigian_calo"] ."')";


if ($conn->query($sql) == TRUE) {
  echo "Them hoạt động thành công";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: hoatdong.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
