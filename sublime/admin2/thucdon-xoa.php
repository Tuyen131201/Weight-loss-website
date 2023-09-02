
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

$thucdon_id =  $_POST['thucdon_id'];

	  
$sql = "DELETE FROM thucdon WHERE thucdon_id='".$thucdon_id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: thucdon.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
