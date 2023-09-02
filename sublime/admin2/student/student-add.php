<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Tài khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tài khoản</li>
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
            <div class="col-md-8 mt-4">

            <?php if(isset($_SESSION['message'])) : ?>
                <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php 
                unset($_SESSION['message']);
                endif; 
            ?>

            <div class="card">
                <div class="card-header">
                    <h3>Thêm học viên</h3>
                </div>
                <div class="card-body">
                    
                    <form action="student-luu.php" method="POST">
                        <div class="mb-3">
                            <label>Họ tên</label>
                            <input type="text" name="TenHV" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Giới tính</label>
                            <div>
                                <input type="radio" id = "gioitinh" name = "gioitinh" value = "female">
                                <label for="female">Nữ</label>
                            </div>
                            <div>
                                <input type="radio" id = "gioitinh" name = "gioitinh" value = "male">
                                <label for="male">Nam</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Ngày sinh</label>
                            <input type="date" name="ngaysinh" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Số điện thoại</label>
                            <input type="text" name="sdt" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Địa chỉ</label>
                            <input type="text" name="diachi" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>IDkhoahoc</label>
                            <input type="text" name="IDkhoahoc" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label>Ten khoa hoc</label>
                            <input type="text" name="tenkhoahoc" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>

                </div>
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