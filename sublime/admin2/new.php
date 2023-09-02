<?php
session_start();

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


 $sql = "INSERT INTO calo (calo_id, bttd_id,bmi_id, thucdon_id,  tong_calo_nap, tong_calo_giam) VALUES ('".$_POST["calo_id"] ."','".$_POST["bttd_ten"] ."','".$_POST["chiso"] ."','".$_POST["thucdon_id"] ."','".$_POST["tong_calo_nap"] ."','".$_POST["tong_calo_giam"] ."')";


 if ($conn->query($sql) == TRUE) {
   echo "Them hoạt động thành công";
 //neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
   header('Location: lieutrinh.php');
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
 
 $conn->close();
 ?>