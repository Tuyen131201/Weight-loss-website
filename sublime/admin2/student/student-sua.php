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

$mshv =  $_POST['mshv'];
$date = date_create($_POST["ngaysinh"]);
	  
$sql = "UPDATE hocvien set TenHV = '".$_POST['TenHV']."', gioitinh = '".$_POST['gioitinh']."',ngaysinh = '".$date ->format('Y-m-d')."',
                    sdt = '".$_POST['sdt']."','".$_POST['diachi']."','".$_POST['IDkhoahoc']."''".$_POST['tenkhoahoc']."'";
$sql = $sql. " WHERE mshv='".$mshv."'";


if ($conn->query($sql) == TRUE) {
  header('Location: student.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
