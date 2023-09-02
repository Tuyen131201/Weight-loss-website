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
              <li class="breadcrumb-item active">Họat động</li>
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
                        <h3>Chỉnh sửa hoạt động
                            <a href="hoatdong.php" class="btn btn-danger float-end">Back</a>
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

                        $bttd_id =  $_POST['bttd_id'];
                        $sql = "select * FROM hoatdong WHERE bttd_id='".$bttd_id."'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();

                        ?> 
                    
                          <form action="hoatdong-sua.php" method="post">
                          <div class="mb-3">
                                <label>Mã hoat động </label> <br>
                                <input type="text" name="bttd_id" class="form-control" value="<?php echo $row['bttd_id'];?>">
                            </div>
                        <div class="mb-3">
                                <label>Tên hoạt động </label> <br>
                                <input type="text" name="bttd_ten" class="form-control" value="<?php echo $row['bttd_ten'];?>">
                            </div>
                           
                            <div class="mb-3">
                                <label>Calo </label> <br>
                                <input type="text" name="bttd_calo" class="form-control" value="<?php echo $row['bttd_calo'];?>" >
                            </div>
                            <!-- <div class="mb-3">
                                <label>Email admin</label> <br>
                                <input type="text" name="ngaykhaigiang" class="form-control" value=">
                            </div> -->
                            <!-- <input type="submit"> -->
                            <div class="mb-3">
                                <label>Thời gian  </label> <br>
                                <input type="text" name="thoigian_calo" class="form-control" value="<?php echo $row['thoigian_calo'];?>" >
                            </div>
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