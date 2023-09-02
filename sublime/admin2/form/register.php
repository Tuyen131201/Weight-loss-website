
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" >
    <link rel="stylesheet" href="/font/themify-icons-font/themify-icons/themify-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 "> 
    <link rel="stylesheet" href ="../dist/css/register.css" >
    <title>Đăng ký admin </title>
</head>
<body>
       

    <form action="./luu.php" method="POST" role="form" autocomplete="off">
        <div class="container">
            <h1 class = "text-center">Đăng ký admin</h1>
            <hr>
            <label for="fullname"><b>Họ và tên</b></label>
            <input  id="fullname" type="text" class= "form-control" placeholder="Nhập họ tên" name="fullname" required>
            <label for="email"><b>Email</b></label>
            <input id="email" type="text" class= "form-control" placeholder="Nhập Email" name="email" required>
            <label for="birthday"><b>Ngày sinh</b></label> 
            <input id="birthday" type="date" class= "form-control" placeholder="Nhập ngày sinh" name="birthday" required>
            <label for="gender"><b>Giới tính</b>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="nam"> Nam </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" checked>
                <label class="form-check-label" for="nu">Nữ</label>
            </div><br>
            <label for="phone"><b>Số điện thoại</b></label>
            <input id="phone" type="text" class= "form-control" placeholder="Nhập số điện thoại" name="phone" required>

            <label for="username"><b>Username</b></label>
            <input id="username" type="text" class= "form-control" placeholder="Nhập username" name="username" required>
            <label for="password"><b>Mật Khẩu</b></label>
            <input id="password" type="password" class= "form-control" placeholder="Nhập Mật Khẩu" name="password" required>
            <label for="pwd-repeat"><b>Nhập Lại Mật Khẩu</b></label>
            <input id="pwd-repeat" type="password" class= "form-control" placeholder="Nhập Lại Mật Khẩu" name="pwd2" required>
            <label for="img"><b>Ảnh đại diện</b></label>
            <input id="img" type="file" class= "form-control" placeholder="Thêm ảnh đại diện" name="img" required>
            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
            </label>
            <div class="clearfix">
            <button type="submit" class="signupbtn" value="Đăng kí">Đăng ký</button>
            </div>
        </div>
    </form>

</body>
</html>