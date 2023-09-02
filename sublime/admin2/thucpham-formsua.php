<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Món ăn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"> Món ăn</li>
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
                        <h3>Chỉnh sửa món ăn
                            <a href="thucpham.php" class="btn btn-danger float-end">Back</a>
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

                        $thucpham_id =  $_POST['thucpham_id'];
                        $sql = "select * FROM thucpham WHERE thucpham_id='".$thucpham_id."'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();

                        ?> 
                    
                          <form action="thucpham-sua.php" method="post">
                          <div class="mb-3">
                                <label>Mã món ăn </label> <br>
                                <input type="text" name="thucpham_id" class="form-control" value="<?php echo $row['thucpham_id'];?>">
                            </div>
                        <div class="mb-3">
                                <label>Tên món ăn </label> <br>
                                <input type="text" name="thucpham_ten" class="form-control" value="<?php echo $row['thucpham_ten'];?>">
                            </div>
                           
                            <div class="mb-3">
                                <label>Calo </label> <br>
                                <input type="text" name="thucpham_calo" class="form-control" value="<?php echo $row['thucpham_calo'];?>" >
                            </div>
                            <!-- <div class="mb-3">
                                <label>Email admin</label> <br>
                                <input type="text" name="ngaykhaigiang" class="form-control" value=">
                            </div> -->
                            <!-- <input type="submit"> -->
                            <div class="mb-3">
                                <label>  Đơn vị tính </label> <br>
                                <select class="" name="donvitinh" id="donvitinh" >
                                    <option value="">Chọn đơn vị tính</option>
                                    <option value="1 cái" >Một cái </option>
                                    <option value="200g" >200g </option>
                                    <option value="1 tô" >1 tô</option>
                                    <option value="500g" >500g</option>
                                </select>
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