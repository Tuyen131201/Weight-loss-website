
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

	  
$sql = "DELETE FROM hocvien WHERE mshv='".$mshv."'";


if ($conn->query($sql) == TRUE) {
  header('Location: student.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
