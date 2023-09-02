<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Học viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Học viên</li>
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
                        <h3>Thêm người dùng
                            <a href="user_index.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="user-luu.php" method="post">
                        <div class="mb-3">
                                <label> Email: </label> <br>
                                <input type="text" name="tv_email" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Họ tên người dùng: </label> <br>
                                <input type="text" name="tv_hoten" class="form-control" >
                            </div>
                           
                            <div class="mb-3">
                                <label>Password: </label> <br>
                                <input type="password" class="form-control" name="tv_password">
                            </div>
                            <div class="mb-3">
                                <label>Số điện thoại: </label> <br>
                                <input type="text" class="form-control" name="tv_sdt">
                            </div>
                            <div class="mb-3">
                                <label>Địa chỉ: </label> <br>
                                <input type="text" class="form-control" name="tv_diachi">
                            </div>
                            <select name="user_type">
	  <option value="user">Người dùng</option>
   </select>
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