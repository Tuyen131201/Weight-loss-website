
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

$bmi_id =  $_POST['bmi_id'];

	  
$sql = "DELETE FROM bmi WHERE bmi_id='".$bmi_id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: bmi_hien.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
