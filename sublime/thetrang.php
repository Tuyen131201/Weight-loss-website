
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

       // Create connection
       $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
       if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       }

       $thetrang_id =  $_POST['thetrang_id'];
       $sql = "select * FROM thetrang WHERE thetrang_id='".$thetrang_id."'";

       $result = $conn->query($sql);
       $row = $result->fetch_assoc();

       ?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Thể trạng của bạn</title>
   <title>sublime &mdash; </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/bmi.css">

</head>
<body>
    <div class="chadn" >
        <div id="fh5co-container">
            <div class="js-sticky">
                <div class="fh5co-main-nav">
                    <div class="container-fluid ha">
                        <div class="fh5co-menu-1">
                            <a href="index.php" data-nav-section="home">Trang chủ</a>
                            <a href="#" data-nav-section="about">Về chúng tôi</a>
                            <a href="#" data-nav-section="features">Chỉ số</a>
                        </div>
                        <div class="fh5co-logo">
                            <a href="index.php">Sublime</a>
                        </div>
                        <div class="fh5co-menu-2">
                            <a href="#" data-nav-section="menu">Thực đơn</a>
                            <a href="#" data-nav-section="events">Khóa học</a>
                            <a href="#" data-nav-section="reservation">Liên hệ</a>
                            <a href="" data-nav-section="">Tài khoản </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

   <h2>Thể trạng của bạn</h2>
   <table class="table table-bordered table-striped table-responsive-stack"  id="tableOne">
      <thead class="thead-dark">
         <tr>
            <th>STT <input type="text" name="thetrang_id"  value="<?php echo $srow['thetrang_id'];?>"><br> </th>
            <th>Email thành viên <input type="text" name="tv_email"  value="<?php echo $row['tv_email'];?>"><br></th>
            <th>Chiều cao<input type="text" name="height"  value="<?php echo $row['height'];?>"><br></th>
            <th>Cân nặng<input type="text" name="weight"  value="<?php echo $row['weight'];?>"><br></th>
            <th>Ngày<input type="date" name="ngay"  value="<?php echo $row['ngay'];?>"><br></th>
            <th><input class="bt"  type="submit"  value="Cập nhật"></th>
         </tr>
         
      </thead>
      
   </table>
</form>
	</body>
</html>