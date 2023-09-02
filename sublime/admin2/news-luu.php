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

$sql = "INSERT INTO tintuc (tintucID,tieude,hinhanh,noidung,ngaydang) 
        VALUES (NULL,'".$_POST["tieude"] ."', '".$_POST["hinhanh"] ."', '".$_POST["noidung"] ."',".time().")";

if ($conn->query($sql) == TRUE) {
  echo "Them tin tuc thanh cong";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: news.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
