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

$thetrang_id =  $_POST['thetrang_id'];


	  
$sql = "UPDATE thetrang set height = '".$_POST['height']."', weight = '".$_POST['weight']."'
                          ,ngay = '".$_POST['ngay']."'";
$sql = $sql. " WHERE thetrang_id='".$thetrang_id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: thetrang.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
