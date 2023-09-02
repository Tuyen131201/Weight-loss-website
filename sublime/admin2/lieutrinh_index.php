<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Liệu trình</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Liệu trình </li>
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
                      $sql="SELECT hoatdong.bttd_ten, bmi.chiso, thucdon.buoi, thucpham.thucpham_ten calo.calo_id, calo.tong_luong_calo_giam, calo.tong_luong_calo_nap 
                      FROM hoatdong, bmi, calo, thucdon, thucpham
                      where hoatdong.bttd_id= calo.bttd_id and bmi.bmi_id= calo.bmi_id and thucdon.thucdon_id = calo.thucdon_id and thucpham.thucpham_id=thucdon.thucdon_id";
                      $result = mysqli_query($conn,$sql);
                      
                    
                  ?>
                               
              
                    <div class="card">
                    <div class="card-header">
                      <a href="lieutrinh.php" class="btn btn-primary float-end">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>ID</th>
                                    <th>Chỉ số BMI</th>
                             
                                    <th>Buổi</th>
                                    <th>Tên món ăn</th>
                                    <th>Tên hoạt động</th>
                                    <th>Tổng lượng calo giảm</th>
                                    <th>Tổng lượng calo nạp </th>
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
                                            <td>" .$row['calo_id']. "</td>
                                            <td>" .$row['chiso']. "</td>
                                            <td>" .$row['buoi']. "</td>
                                            <td>" .$row['thucpham_ten']. "</td>
                                            <td>" .$row['bttd_ten']. "</td>
                                            <td>" .$row['tong_calo_giam']. "</td>
                                            <td>" .$row['tong_calo_nap']. "</td>
                                          
                                        "
                                           
                                                ?>
                                               
                                                     
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?> 
                          
                                              <form method="post" action="hoatdong-xoa.php"> 
                                                  <input type="submit" name="action" class="btn btn-danger" value="Delete"/>
                                                  <input type="hidden" name="calo_id" value="<?php echo $row['calo_id']; ?>"/>
                                                      </form>
                                                     
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?>
                                              <form method="post" action="hoatdong-formsua.php"> 
                                                <input type="submit" name="action" class="btn btn-primary" value="Edit"/>
                                                <input type="hidden" name="calo_id" value="<?php echo $row['calo_id']; ?>"/>
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