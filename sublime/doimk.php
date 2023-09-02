<?php
session_start();

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

//rang buoc mat khau

$old_pass = ($_POST['pass']);
$pass1 = ($_POST['pass1']);
$pass2 = ($_POST['pass2']);

//kiem tra mat khau cu
$sql = "select tv_password from thanhvien where tv_email = '".$_COOKIE["user"]."'";	
$result = $conn->query($sql);
// echo "$result->num_rows";
if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		
		if($row["password"] != $old_pass){
			echo "Mật khẩu cũ không đúng. Vui lòng nhập lại! ";
			}
		else if($row["password"] === $pass1){
				echo "Mật khẩu mới bị trùng. Vui lòng nhập lại!";
				}
			 else if($pass1 != $pass2) {
					echo "Mật khẩu không khớp. Vui lòng nhập lại! ";
					}
				  else {

						$user = $_COOKIE["user"];
						$sql = "UPDATE thanhvien set tv_password = '$pass1'";
						$sql = $sql. " WHERE tv_email='$user'";
							if ($conn->query($sql) == TRUE) {
									echo "Đổi mật khẩu thành công!";
									} 
								else {
									echo "Error: " . $sql . "<br>" . $conn->error;}	
							}
					}
	
	$conn->close();
	?>
	
