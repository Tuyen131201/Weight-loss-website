<?php 
	session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>
   <title>sublime &mdash; </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/dn.css">

</head>
<body>
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
                            <a href="login_tv.php" data-nav-section="">Đăng nhập </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   
  <div class="form-container">

   <form action="log_tv.php" method="post">
      <h3>Đăng nhập ngay</h3>
 
      <input type="email" name="tv_email" required placeholder="Nhập Email của bạn">
      <input type="password" name="tv_password" required placeholder="Nhập password của bạn">
      <input type="submit" name="submit" value="Đăng nhập" class="form-btn">
      <p>Bạn chưa có tài khoản ? <a href="reg_tv.php">Đăng kí ở đây nhé !</a></p>
   </form>

</div>

</body>
</html>