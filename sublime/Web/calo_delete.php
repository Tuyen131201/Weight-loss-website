
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

$calo_id =  $_POST['calo_id'];

	  
$sql = "DELETE FROM calo WHERE calo_id='".$calo_id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: calo2.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
