<?php 
	session_start();?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sublime &mdash; </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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

<form action="reg_sumbit_tv.php" method="post">
   <h3>Đăng kí tại đây </h3>
   <input type="text" name="tv_hoten" required placeholder="Tên của bạn">
   <input type="email" name="tv_email" required placeholder="Email của bạn">
   <input type="password" name="tv_password" required placeholder="Mật khẩu của bạn">
   <input type="password" name="cpassword" required placeholder="Nhập lại mật khẩu của bạn">
   <input type="text" name="tv_sdt" required placeholder="Nhập số điện thoại">
   <input type="text" name="tv_diachi" required placeholder="Nhập địa chỉ ">
   <select name="user_type">
	  <option value="user">Người dùng</option>
   </select>
   <input type="submit" name="submit" value="Đăng kí" class="form-btn">
   <p>Bạn có tài khoản ? <a href="login_tv">Đăng nhập tại đây</a></p>
</form>

</div>
</body>
</html>
