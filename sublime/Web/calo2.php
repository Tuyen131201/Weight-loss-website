<?php
   $servername = "localhost";
   $username ="root";
   $password ="";
   $database ="giamcan";
   $conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    session_start(); 
}

?>
<!DOCTYPE html>
<head>
<title>Sublime-member</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
    <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="index.html" class="logo">
            Sublime
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
            <!-- settings start -->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="badge bg-success">8</span>
                </a>
                <ul class="dropdown-menu extended tasks-bar">
                    <li>
                        <p class="">Bạn có 2 nhiệm vụ tiến trình</p>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Yêu cầu cập nhật khóa học</h5>
                                    <p></p>20/10/2022
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="45">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="task-info clearfix">
                                <div class="desc pull-left">
                                    <h5>Thực đơn cần được nâng cấp</h5>
                                    <p>30/10/2022</p>
                                </div>
                                        <span class="notification-pie-chart pull-right" data-percent="78">
                                <span class="percent"></span>
                                </span>
                            </div>
                        </a>
                    </li>
                  
    
                    <li class="external">
                        <a href="#">Xem tất cả</a>
                    </li>
                </ul>
            </li>
            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-important">4</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <li>
                        <p class="red">Bạn có 3 tin nhắn mới</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                    <span class="subject">
                                    <span class="from">Anh Thư</span>
                                    <span class="time">Ngay bây giờ</span>
                                    </span>
                                    <span class="message">
                                        Ad ơi em cần giúp đỡ
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                    <span class="subject">
                                    <span class="from">Ngọc Trinh</span>
                                    <span class="time">3 phút trước</span>
                                    </span>
                                    <span class="message">
                                        Web này hiệu quả lắm ạ
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                    <span class="subject">
                                    <span class="from">Minh Quốc</span>
                                    <span class="time">4 ngày trước</span>
                                    </span>
                                    <span class="message">
                                       BMI với các bài tập hiểu quả
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">Xem tất cả tin nhắn</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <li id="header_notification_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
    
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">3</span>
                </a>
                <ul class="dropdown-menu extended notification">
                    <li>
                        <p>Thông báo</p>
                    </li>
        
    
                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="images/2.png">
                    <span class="username"><?php echo $_COOKIE["tv_hoten"]; ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Cá nhân</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i>Cài đặt</a></li>
                    <li><a href="login.html"><i class="fa fa-key"></i> Đăng xuất</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
           
        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Calo</span>
                    </a>
                    <ul class="sub">
						
						<li><a href="calo2.php">Thực đơn</a></li>
                        
                   
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Người dùng </span>
                    </a>
                    <ul class="sub">
                        <li><a href="thetrang.php">Thể trạng </a></li>
                        <li><a href="bmi.php">BMI</a></li>
                    </ul>
                </li>
               
               
                <li>
                    <a href="../login_tv.php">
                        <i class="fa fa-user"></i>
                        <span>Đăng xuất</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
       CALO CỦA TÔI
    </div>
    <?php 
     $sql="SELECT calo.calo_id, calo.tong_calo_can_giam, calo.tong_calo_can_nap, bmi.chiso
     FROM calo, bmi, thetrang
     WHERE calo.bmi_id =  bmi.bmi_id and thetrang.thetrang_id=bmi.thetrang_id and thetrang.tv_email= '".$_COOKIE["tv_email"]."'";
                       
    
                        $result = $conn->query($sql);                   
                ?>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": truea
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
          <th >ID</th>
            <th name ="chiso" >Chỉ số BMI</th>
            <th >Tổng calo cần giảm </th>
            <th>Tổng calo cần tăng</th>
            <th>Xem gợi ý thực đơn</th>
            <th>Thêm</th>
      
            <th>Xóa</th>
            
           
        </tr>
        </thead>
        <?php
                                if ($result->num_rows > 0) {
                                  $result = $conn->query($sql);
                                  $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all as $row) {
                              
                                    echo "<tr>
                                             <td>" .$row['calo_id']. "</td>
                                            <td>" .$row['chiso']. "</td>
                                            <td>" .$row['tong_calo_can_giam']. "</td>
                                            <td>" .$row['tong_calo_can_nap']. "</td>
                                         
                                          
                                        "
                                           
                                        ?>
                                        
                                        
                                      
                                     
                                               
                                        <?php
                                              echo "</td>";
                                            echo "<td>";
                                        ?> 
                    
                    <form method="post" action="calo_xuli.php"> 
                                            <input type="submit" name="action" class="btn btn-success" value="Xem gợi ý thực đơn"/>
                                          
                                                </form>
                  
                                           

                                               
                                        <?php
                                              echo "</td>";
                                            echo "<td>";
                                        ?> 
                          
                          <form method="post" action="calo_add.php"> 
                                            <input type="submit" name="action" class="btn btn-info" value="Cập nhật"/>
                                          
                                                </form>
                
                                           

                                               
                                        <?php
                                              echo "</td>";
                                            echo "<td>";
                                        ?>                    
                         <form method="post" action="calo_delete.php"> 
                                            <input type="submit" name="action" class="btn btn-danger" value="Delete"/>
                                            <input type="hidden" name="calo_id" value="<?php echo $row['calo_id']; ?>"/>
                                                </form>
                                               
                
                                                  <?php
                                              echo "</td>";
                                            echo "<td>";
                                        ?> 
                                        

                            <?php
                                    echo "</td>
                                </tr>";
                                  }
                        ?>
                              
                        
                                   
                            </tbody>
                        </table>
                        <?php   
                                } else {
                                  echo "0 ket qua tra ve";
                                }
                                $conn->close();
                                ?>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
