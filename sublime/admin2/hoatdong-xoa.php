
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

$bttd_id =  $_POST['bttd_id'];

	  
$sql = "DELETE FROM hoatdong WHERE bttd_id='".$bttd_id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: hoatdong.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
