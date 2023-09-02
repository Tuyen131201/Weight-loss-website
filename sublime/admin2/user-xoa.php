
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

$tv_email =  $_POST['tv_email'];

	  
$sql = "DELETE FROM thanhvien WHERE tv_email='".$tv_email."'";


if ($conn->query($sql) == TRUE) {
  header('Location: user_index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
