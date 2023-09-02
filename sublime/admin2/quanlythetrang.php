<?php
  session_start();
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Khóa học đã giao</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Khóa học đã giao</li>
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
                    $sql="SELECT 	dondangky_khoahoc.lophocID, dondangky_khoahoc.tenlophoc,
                    dondangky_khoahoc.soluonghocvien, giasu.tenGS, thoigianhoc.thongtinbuoihoc,
                    hinhthuchoc.tenHT, monhoc.tenmon, khoihoc.lop
                    FROM 	dondangky_khoahoc, giasu, thoigianhoc, hinhthuchoc, monhoc, khoihoc
                    WHERE 	dondangky_khoahoc.maGS = giasu.maGS
                            AND dondangky_khoahoc.buoiID = thoigianhoc.buoiID
                            AND dondangky_khoahoc.MaHT = hinhthuchoc.MaHT
                            AND dondangky_khoahoc.monid = monhoc.monid
                            AND dondangky_khoahoc.khoiid = khoihoc.khoiid;";
                    $result = $conn->query($sql);                    
                ?>
                    <div class="card">
                    <div class="card-header">
                      <!-- <a href="course-formnhap.php" class="btn btn-primary float-end">Add</a> -->
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>Mã số khóa học</th>
                                    <th>Tên khóa học</th>
                                    <th>Số lượng học viên</th>
                                    <th>Tên gia sư</th>
                                    <th>Thời gian học</th>
                                    <th>Hình thức học</th>
                                    <th>Môn học</th>
                                    <th>Giờ kết thúc</th>
                                    <th>Lớp </th>
                                    <th>Duyệt</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                if ($result->num_rows > 0) {
                                  $result = $conn->query($sql);
                                  $result_all = $result -> fetch_all(MYSQLI_ASSOC);
                                  foreach ($result_all as $row) {
                              
                                    echo "<tr>
                                            <td>" .$row['lophocID']. "</td>
                                            <td>" .$row['tenlophoc']. "</td>
                                            <td>" .$row['soluonghocvien']. "</td>
                                            <td>" .$row['tenGS']. "</td>
                                            <td>" .$row['lop']. "</td>
                                            <td>" .$row['thongtinbuoihoc']. "</td>
                                            <td>" .$row['tenHT']. "</td>
                                            <td>" .$row['tenmon']. "</td>
                                            <td>" .$row['lop']. "</td>
                                           
                                            <td>" 
                                                ?>
                                             <form method="post" action=""> 
                                                  <input type="submit" name="action" class="btn btn-danger" value="Duyệt"/>
                                                  <input type="hidden" name="lophocID" value="<?php echo $row['lophocID']; ?>"/>
                                                      </form>
                                              <?php
                                                    echo "</td>";
                                                 
                                              ?>
                                             
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