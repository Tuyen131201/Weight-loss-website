
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" >
    <link rel="stylesheet" href="/font/themify-icons-font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "> 
    <link rel="stylesheet" href ="../dist/css/register.css" >
    <title>Đăng nhập</title>
</head>
<body>
    <form action="log.php" method="POST" role="form">
   <div class="container">
     <h1>Đăng nhập</h1>
     <hr>
     <label for="username"><b>Username</b></label>
     <input id="username" type="text" class= "form-control" placeholder="Nhập Tài Khoản" name="username" required>
    <label for="password"><b>Mật Khẩu</b></label>
     <input id="password" type="password" class= "form-control" placeholder="Nhập Mật Khẩu" name="password" required>
    <label>
       <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
     </label>
    <div class="clearfix">
       <button type="submit" class="dangnhap">Đăng nhập</button>
     </div>
     <div class="other">

  </div>
   
 </form>

</body>
</html>