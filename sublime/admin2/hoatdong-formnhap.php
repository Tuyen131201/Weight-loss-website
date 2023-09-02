<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Hoạt động</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Hoạt động</li>
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
                        <h3>Thêm hoạt động
                            <a href="hoatdong.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="hoatdong-luu.php" method="post">
                        <div class="mb-3">
                                <label> Mã hoạt động </label> <br>
                                <input type="text" name="bttd_id" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Tên hoạt động </label> <br>
                                <input type="text" name="bttd_ten" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label>Calo</label> <br>
                                <input type="text" name="bttd_calo"  class="form-control">
                                <br>
                            </div>
                            
                            <div class="mb-3">
                                <label> Tên admin </label> <br>
                                <select class="" name="tv_email" id="tv_email" >
                                  <option value ="">Chọn tên admin</option>
                                
                                  <?php
                                  // Feching active categories
                                  $ret=mysqli_query($conn,"SELECT tv_email, tv_hoten from  thanhvien where user_type= 'admin'");
                                  while($result=mysqli_fetch_array($ret))
                                  {    
                                  ?>
                                  <option value="<?php echo htmlentities($result['tv_email']);?>"><?php echo htmlentities($result['tv_hoten']);?></option>
                                  <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Thời gian</label> <br>
                                <input type="text" name="thoigian_calo"  class="form-control">
                                <br>
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