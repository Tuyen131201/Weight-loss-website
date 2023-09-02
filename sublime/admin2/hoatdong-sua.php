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

$sql = "UPDATE hoatdong set bttd_ten = '".$_POST['bttd_ten']."', bttd_calo = '".$_POST['bttd_calo']."', thoigian_calo = '".$_POST['thoigian_calo']."'";
$sql = $sql. " WHERE bttd_id='".$bttd_id."'";
if ($conn->query($sql) == TRUE) {
  header('Location: hoatdong.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

