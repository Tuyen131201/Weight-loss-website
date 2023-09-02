<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Thực đơn </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Thực đơn</li>
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
                    $sql="SELECT thucdon.thucdon_id, thucdon.buoi, thucdon.tongcalo, thucpham.thucpham_ten
                          FROM thucdon, thucpham
                          WHERE thucpham.thucpham_id =  thucdon.thucpham_id ";
                              
                    $result = $conn->query($sql);   
                             
                ?>
                    <div class="card">
                    <div class="card-header">
                      <a href="thucdon-formnhap.php" class="btn btn-primary float-end">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>Mã thực đơn</th>
                                   
                                    <th>Buổi </th>
                                    <th>Tổng calo</th>
                                    <th>Tên món ăn</th>
                                  
                                  
                                    
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
                                            <td>" .$row['thucdon_id']. "</td>
                                          
                                            <td>" .$row['buoi']. "</td>
                                            <td>" .$row['tongcalo']. "</td>
                                            <td>" .$row['thucpham_ten']. "</td>
                                            
                                            <td>" 
                                                ?>
                                             <form method="post" action="thucdon-xoa.php"> 
                                                  <input type="submit" name="action" class="btn btn-danger" value="Delete"/>
                                                  <input type="hidden" name="thucdon_id" value="<?php echo $row['thucdon_id']; ?>"/>
                                                      </form>
                                              <?php
                                                    echo "</td>";
                                                  echo "<td>";
                                              ?>
                                              <form method="post" action="thucdon-formsua.php"> 
                                                <input type="submit" name="action" class="btn btn-primary" value="Edit"/>
                                                <input type="hidden" name="thucdon_id" value="<?php echo $row['thucdon_id']; ?>"/>
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