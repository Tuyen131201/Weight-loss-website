<?php
   $servername = "localhost";
   $username ="root";
   $password ="";
   $database ="giamcan";
   $conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
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
                    <span class="username">Mai Tuyền</span>
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
                        
                        <li><a href="hoatdong.php">Hoạt Động</a></li>
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
                    <a href="login.html">
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
        Thực Đơn Dành Cho Bạn 
    </div>
    <?php
                    $sql="SELECT   thucdon.buoi,thucpham.thucpham_ten, thucpham.donvitinh, thucpham.thucpham_calo
                          FROM thucdon, thucpham
                          WHERE thucpham.thucpham_id =  thucdon.thucpham_id and thucdon.thucdon_id like '%2%'";
                              
                    $result = $conn->query($sql);   
                             
                ?>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Buổi</th>
            <th>Tên món ăn</th>
            <th>Calo</th>
            <th>Đơn vị tính</th>
           
                     </tr>
        </thead>
        <?php
                                if ($result->num_rows > 0) {
                                  $result = $conn->query($sql);
                                  $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all as $row) {
                              
                                    echo "<tr>
                                            <td>" .$row['buoi']. "</td>
                                            <td>" .$row['thucpham_ten']. "</td>
                                
                                            <td>" .$row['thucpham_calo']. "</td>
                                            <td>" .$row['donvitinh']. "</td>
                                            " 
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
<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
        Thực Đơn Dành Cho Bạn 
    </div>
    <?php
                    $sql2="SELECT   thucdon.buoi,thucpham.thucpham_ten, thucpham.donvitinh, thucpham.thucpham_calo
                          FROM thucdon, thucpham
                          WHERE thucpham.thucpham_id =  thucdon.thucpham_id and thucdon.thucdon_id like '%1%'";
                              
                    $result2 = $conn->query($sql2);   
                             
                ?>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">Buổi</th>
            <th>Tên món ăn</th>
            <th>Calo</th>
            <th>Đơn vị tính</th>
           
                     </tr>
        </thead>
        <?php
                                if ($result2->num_rows > 0) {
                                  $result2 = $conn->query($sql2);
                                  $result_all2 = $result2-> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all2 as $row2) {
                              
                                    echo "<tr>
                                            <td>" .$row2['buoi']. "</td>
                                            <td>" .$row2['thucpham_ten']. "</td>
                                
                                            <td>" .$row2['thucpham_calo']. "</td>
                                            <td>" .$row2['donvitinh']. "</td>
                                            " 
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
