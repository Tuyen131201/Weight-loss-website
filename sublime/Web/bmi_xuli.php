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


if(isset($_POST['submit']))

{

	$weight=$_POST['weight'];

	$height=$_POST['height'];

	$sen=100;

	$oriheight=$height/$sen;

	if($weight<=0 || $weight>500)

	{

		echo "Xin vui lòng nhập cân nặng lại ! ";

		exit;

	}

	if($oriheight <= 0 || $oriheight > 2.5)

	{

		echo "Xin vui lòng nhập chiều cao";

		exit;

	}
	$bmi=$weight/($oriheight*$oriheight);


}
$sql = "INSERT INTO thetrang (thetrang_id, height, weight,ngay, tv_email) VALUES  ('".$_POST["thetrang_id"] ."','".$_POST["height"] ."','".$_POST["weight"] ."','".$_POST["ngay"] ."','".$_COOKIE["tv_email"]."')";
$conn->query($sql);
$sql= "INSERT INTO bmi (bmi_id, chiso, thetrang_id) VALUES ('".$_POST["bmi_id"] ."','$bmi','".$_POST["thetrang_id"] ."')";
if ($conn->query($sql ) == TRUE) {
  echo "BMI đã được tính";
//neu thuc hien thanh cong, chung ta se cho di chuyen den taidulieu_bang.php
  header('Location: bmi_hien.php');
} else {
  echo "Error: " . $sql . " <br>" . $conn->error;

}

$conn->close();
?>
