<?php
// //xoa session
session_start();
session_destroy();
echo "Đã xóa toàn bộ session <br>";

//XOA COOKIE
setcookie( "user", "", time()- 60, "/","", 0);
setcookie( "username", "", time()- 60, "/","", 0);
// setcookie( "id", "", time()- 60, "/","", 0);
echo "Đã xóa toàn bộ cookie";
header("location: 20212022_02_CT299_10_B1906417/Admin/index.php");
?>