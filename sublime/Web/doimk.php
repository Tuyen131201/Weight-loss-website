<?php
session_start();

$servername = "localhost";
$tv_emailname = "root";
$password = "";
$dbname = "giamcan";

// Create connection
$conn = new mysqli($servername, $tv_emailname, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//rang buoc mat khau

	$old_pass = $_POST['pass'];
	$pass1 = $_POST['pass1'];
	$pass2 =$_POST['pass2'];
	
//kiem tra mat khau cu
	$sql = "select tv_password from thanhvien where tv_email = '".$_COOKIE["tv_email"]."'";	
	$result = $conn->query($sql);
	// echo "$result->num_rows";
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		
		if($row["tv_password"] != $old_pass){
			echo "Doi mat khau khong thanh cong. Mat khau cu nhap sai! ";
			alert('hhh');
			}
		else if($row["tv_password"] === $pass1){
				echo "Doi mat khau khong thanh cong. Mat khau cu va moi bi trung! ";
				}
			 else if($pass1 != $pass2) {
					echo "Doi mat khau khong thanh cong. Mat khau nhap lai khong khop! ";
					}
				  else {
					$tv_email = $_COOKIE["tv_email"];
					$sql = "UPDATE thanhvien set tv_password = '$pass1'";
					$sql = $sql. " WHERE tv_email='$tv_email'";
						if ($conn->query($sql) == TRUE) {
								echo "Đổi mật khẩu thành công!";
                                header('Location: index.php');
								} 
							else {
								echo "Error: " . $sql . "<br>" . $conn->error;}	
						}
				}

$conn->close();
?>

