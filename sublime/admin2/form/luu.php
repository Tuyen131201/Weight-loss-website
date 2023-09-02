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

// $date = date_create($_POST["birth"]);

$sql = "INSERT INTO accounts (username, password, status, last_updated, create_time, fullname, email, phone) 
	VALUES ('".$_POST["username"] ."', MD5('".$_POST['password']. "'),1,".time() .",".time() .", '".$_POST["fullname"] ."','".$_POST["email"] ."','".$_POST["phone"] ."' )";

if ($conn->query($sql) == TRUE) {
  echo "Them người dùng thanh cong";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
