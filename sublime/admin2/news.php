<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
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
                <?php
                    $sql="SELECT * FROM tintuc";
                    $result = $conn->query($sql);                    
                ?>
                    <div class="card">
                    <div class="card-header">
                      <a href="news-formnhap.php" class="btn btn-primary float-end">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>Mã số tin tức</th>
                                    <th>Tiêu đề</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đăng</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if ($result->num_rows > 0) {
                                  $result = $conn->query($sql);
                                  $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all as $row) {
                              
                                    echo "<tr>
                                            <td>" .$row['tintucID']. "</td>
                                            <td>" .$row['tieude']. "</td>
                                            <td>" .$row['hinhanh']. "</td>
                                            <td>" .$row['noidung']. "</td>
                                            <td>" .date('d/m/y H:i', $row['ngaydang']). "</td>
                                            <td>" 
                                                ?>
                                             <form method="post" action="news-xoa.php"> 
                                                  <input type="submit" name="action" class="btn btn-danger" value="Delete"/>
                                                  <input type="hidden" name="tintucID" value="<?php echo $row['tintucID']; ?>"/>
                                                      </form>
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?>
                                              <form method="post" action="news-formsua.php"> 
                                                <input type="submit" name="action" class="btn btn-primary" value="Edit"/>
                                                <input type="hidden" name="tintucID" value="<?php echo $row['tintucID']; ?>"/>
                                              </form>

                                  <?php
    	                                  echo "</td>
                                      </tr>";
                                }
                              ?>
                            </tbody>
                        </table>
                        <?php   
                                } else {
                                  echo "0 ket qua tra ve";
                                }
                                $conn->close();
                                ?>
                    </div>
                  </div>
              </div>
          </div>
        <!-- /.row -->
          </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php') ?>