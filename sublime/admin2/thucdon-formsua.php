<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Thực Đơn</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Thực Đơn</li>
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
                        <h3>Sửa thông tin thực đơn
                            <a href="thucdon.php" class="btn btn-danger float-end">Back</a>
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

                        $thucdon_id =  $_POST['thucdon_id'];
                        $sql = "select * FROM thucdon WHERE thucdon_id='".$thucdon_id."'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();

                        ?> 
                          <form action="thucdon-sua.php" method="post">
                          <div class="mb-3">
                                <label>Mã Thực Đơn: </label> <br>
                                <input type="text" name="thucdon_id" class="form-control" value="<?php echo $row['thucdon_id'];?>">
                            </div>
                          
                           
                            
                            <div class="mb-3">
                                <label>Buổi </label> <br>
                                <input type="text" name="buoi" class="form-control" value="<?php echo $row['buoi'];?>">
                            </div>
                         
                            <div class="mb-3">
                                <label>Tổng calo </label>
                                <br><input type="text" name="tongcalo" class="form-control" value="<?php echo $row['tongcalo'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Tên món ăn:  </label> <br>
                                <select class="" name="thucpham_ten" id="thucpham_ten" >
                                <option value ="">Chọn món ăn</option>
                                
                                  <?php
                                  // Feching active categories
                                  $ret=mysqli_query($conn,"SELECT thucpham_id, thucpham_ten from  thucpham");
                                  while($result=mysqli_fetch_array($ret))
                                  {    
                                  ?>
                                  <option value="<?php echo htmlentities($result['thucpham_id']);?>"><?php echo htmlentities($result['thucpham_ten']);?></option>
                                  <?php } ?>

                                </select>
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