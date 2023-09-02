<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Tin tức</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tin tức</li>
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
                        <h3>Chỉnh sửa tin tức
                            <a href="news.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "giasu";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }

                        $id =  $_POST['tintucID'];
                        $sql = "select * FROM tintuc WHERE tintucID='".$id."'";

                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        ?>
                       
                          <form action="news-sua.php" method="post">
                          <div class="mb-3">
                                <label>Mã số tin tức: </label> <br>
                                <input type="text" name="tintucID" class="form-control" value="<?php echo $row['tintucID'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Tiêu đề </label> <br>
                                <br><input type="text" name="tieude" class="form-control" value="<?php echo $row['tieude'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Hình ảnh: </label> <br>
                                <input type="file" name="hinhanh" class="form-control" value="<?php echo $row['hinhanh'];?>">
                            </div>
                            <div class="mb-3">
                                <label>Nội dung tin</label> <br>
                                <textarea name="noidung" id="editor1" cols="30" rows="10" value="<?php echo $row['noidung'];?>"></textarea>
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
  <script>

CKEDITOR.replace( 'editor1' );

</script>
<?php include('footer.php') ?>