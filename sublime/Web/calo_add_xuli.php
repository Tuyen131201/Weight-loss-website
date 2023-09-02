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


$sql = "INSERT INTO calo (calo_id, tong_calo_can_giam,tong_calo_can_nap, bmi_id) VALUES ('".$_POST["calo_id"] ."','".$_POST["tong_calo_can_giam"] ."','".$_POST["tong_calo_can_nap"] ."','".$_POST["chiso"] ."')";



if ($conn->query($sql) == TRUE) {
  echo "Cập nhật calo thành công";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: calo2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
