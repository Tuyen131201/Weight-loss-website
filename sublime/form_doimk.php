<?php 
	session_start();
?>
<!DOCTYPE html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Đăng nhập</title>
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
        <div class="wrapper" >
            <h2>ĐỔI MẬT KHẨU </h2>
            <form action="" method= "POST">
                <div class="section1 content">
                    <div class="text">
                        <span>Nhập mật khẩu cũ của bạn </span>
                    </div>
                    <input type ="text" name="chieucao" autocomplete="off" placeholder="centimet" >
                </div>
                <div class="section2 content">
                    <div class="text">
                        <span class="text" >Nhập cân nặng của bạn: </span>
                    </div>
                    <input type ="text" name="cannang" autocomplete="off" placeholder="kilogram" >
                </div>
                <div class ="submit">
                    <input type="submit" name ="submit" value="Tính BMI" >
                    <input type="reset" value ="Clear">
                </div>
            </form>
        </div>
	</body>
</html>