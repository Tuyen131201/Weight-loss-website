<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Người dùng</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Người dùng</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
          <!-- Info boxes -->
            <div class="row">
            <div class="card">
                    <div class="card-header">
                        <h3>Chỉnh sửa người dùng
                            <a href="student.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

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

                        $tv_email =  $_POST['tv_email'];
                        $sql = "select * FROM thanhvien WHERE tv_email='".$tv_email."'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                        
                          <form action="user-sua.php" method="post">
                          <div class="mb-3">
                                <label>Email người dùng: </label> <br>
                                <input type="email" name="tv_email" class="form-control" value="<?php echo $row['tv_email'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Họ tên người dùng: </label>
                                <br><input type="text" name="tv_hoten" class="form-control" value="<?php echo $row['tv_hoten'];?>">
                            </div>
                           
                            <div class="mb-3">
                                <label>Password: </label> <br>
                                <input type="password" name="tv_password" class="form-control" value="<?php echo $row['tv_password'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Số điện thoại: </label>
                                <br><input type="text" name="tv_sdt" class="form-control" value="<?php echo $row['tv_sdt'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Địa chỉ: </label>
                                <br><input type="text" name="tv_diachi" class="form-control" value="<?php echo $row['tv_diachi'];?>">
                            </div>
                            <!-- <input type="submit"> -->
                            <div class="mb-3 text-center">
                                <input type="submit" class="btn btn-primary ">
                            </div>
                        </form>

                   </div>
                  </div>
                </div>
        <!-- /.row -->
          <!-- </div>/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php') ?>