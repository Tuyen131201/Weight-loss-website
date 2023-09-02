<?php 
	session_start();
?>

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
// $sql = "select *from thanhvien where tv_email = '".$_POST["tv_email"]."' and tv_password = '".md5($_POST["tv_password"])."'";
$sql = " SELECT * FROM thanhvien where tv_email = '".$_POST["tv_email"]."' and tv_password = '".($_POST["tv_password"])."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  $row = $result->fetch_assoc();
  $cookie_name = "user";
  $cookie_value = $row['tv _sdt'] ;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
  setcookie("tv_hoten", $row['tv_hoten'], time() + (86400 / 24), "/");
  setcookie("tv_email", $row['tv_email'], time() + (86400 / 24), "/");

 
		if($row['user_type'] == 'admin'){

			$_SESSION['admin_name'] = $row['tv_hoten'];
			header('location:admin2/dashboard.php');

		}elseif($row['user_type'] == 'user'){

			$_SESSION['user_name'] = $row['tv_hoten'];
			header('location:web/index.php');

		}
	
	
  } else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	header('Refresh: 60;url = login_tv.php');
  }
  
  $conn->close();
  ?>
    
  