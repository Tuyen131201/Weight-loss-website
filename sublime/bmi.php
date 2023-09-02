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
                            <a href="login_tv.php" data-nav-section=""> Đăng nhập </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit" >
        <div class="wrapper" >
            <form method= "POST">
            <h3 class="chisobmi">Tính chỉ số BMI </h3>
            <div class="section1 content">
                    <div class="text">
                        <span>Tuổi của bạn: </span>
                    </div>
                    <input type ="text" name="age" autocomplete="off" placeholder="tuổi" >
                </div>
                <div class="section1 content">
                    <div class="text">
                        <span>Nhập chiều cao của bạn: </span>
                    </div>
                    <input type ="text" name="height" autocomplete="off" placeholder="centimet" >
                </div>
                <div class="section2 content">
                    <div class="text">
                        <span class="text" >Nhập cân nặng của bạn: </span>
                    </div>
                    <input type ="text" name="weight" autocomplete="off" placeholder="kilogram" >
                </div>
                <div class ="submit" >
                    <input type="submit" name ="submit"  id ="result" value="Tính BMI" >
                    <input type="reset" value ="Clear">
                </div>
                <?php
                if(isset($_POST['submit']))

                {

                    $age=$_POST['age'];

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

                    if ($bmi >= 13.6 && $bmi <= 18.5) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px ;margin-right:50px'>Chỉ số  BMI: ".$bmi." của bạn ở gầy độ I. Bạn cần phải tăng cân.  </span>";?><?php
                    } elseif ($bmi > 18.5 && $bmi < 24.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'>Chỉ số BMI ".$bmi." của bạn là bình thường. Bạn không cần tăng cân hoặc giảm cân.</span>";?><?php
                    } elseif ($bmi > 25 && $bmi < 29.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'>Chỉ số BMI ".$bmi."của bạn ở chế độ thừa cân. Bạn cần phải giảm cân </span>";?><?php
                    } elseif ($bmi > 30 && $bmi < 34.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'>Chỉ số BMI  ".$bmi." của bạn ở béo phì độ I  Bạn cần phải giảm cân </span>";?><?php
                    } elseif ($bmi > 35 && $bmi < 39.9) {
                        echo "<span style='color:#00203FFF; display:block; margin-top:5px;margin-right:50px'>Chỉ số BMI  ".$bmi." của bạn ở béo phì độ II. Bạn cần phải giảm cân </span>";?><?php
                    } 
                } else {
                    echo "";
                }
            ?>
            
                </form>
                
                </div>
            
        </div>
        
	</body>
</html>