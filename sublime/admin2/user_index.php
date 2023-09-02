<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Tài Khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tài Khoản</li>
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
                      $sql="SELECT * FROM thanhvien where user_type ='user'";
                      $result = mysqli_query($conn,$sql);
                      
                    
                  ?>
                               
              
                    <div class="card">
                    <div class="card-header">
                      <a href="user-formnhap.php" class="btn btn-primary float-end">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>Email</th>
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                
                                    <th>Xóa</th>
                                    <th>Sửa</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if ($result->num_rows > 0) {
                                  $result = $conn->query($sql);
                                  $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all as $row) {
                              
                                    echo "<tr>
                                            <td>" .$row['tv_email']. "</td>
                                            <td>" .$row['tv_hoten']. "</td>
                                            <td>" .$row['tv_sdt']. "</td>
                                            <td>" .$row['tv_diachi']. "</td>
                                           
                                        "
                                           
                                                ?>
                                               
                                                     
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?> 
                          
                                              <form method="post" action="user-xoa.php"> 
                                                  <input type="submit" name="action" class="btn btn-danger" value="Delete"/>
                                                  <input type="hidden" name="tv_email" value="<?php echo $row['tv_email']; ?>"/>
                                                      </form>
                                                     
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?>
                                              <form method="post" action="user-formsua.php"> 
                                                <input type="submit" name="action" class="btn btn-primary" value="Edit"/>
                                                <input type="hidden" name="tv_email" value="<?php echo $row['tv_email']; ?>"/>
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