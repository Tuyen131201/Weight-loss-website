<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Học viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Tài khoản</li>
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
                    $sql="SELECT * FROM hocvien";
                    $result = mysqli_query($conn,$sql);
                    
                    mysqli_close($conn);
                ?>
                    <div class="card">
                    <div class="card-header">
                      <a href="student-add.php" class="btn btn-primary float-end">Add</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>Mã số học viên</th>
                                    <th>Tên học viên</th>
                                    <th>Giới tính</th>
                                    <th>Ngày sinh</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>ID Khóa học</th>
                                    <th>Tên khóa học</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                              ?>
                                    <tr>
                                            <td><?=$row['mshv'] ?></td>
                                            <td><?=$row['TenHV'] ?></td>
                                            <td><?=$row['gioitinh'] ?></td>
                                            <td><?=$row['ngaysinh'] ?></td>
                                            <td><?=$row['sdt'] ?></td>
                                            <td><?=$row['diachi'] ?></td>
                                            <td><?=$row['IDkhoahoc'] ?></td>
                                            <td><?=$row['tenkhoahoc'] ?></td>
                                              <td> 
                                                <!-- <a href="student-edit.php?id= 
                                                #$row['mshv'] ?>
                                                " class="btn btn-primary">Edit</a> -->
                                                <form method="post" action="form_sua.php"> 
                                                <input type="submit" name="action" value="sua"/>
                                                <input type="hidden" name="mshv" value="<?php echo $row['mshv']; ?>"/>
                                              </td>
                                              <td>
                                                <form method="post" action="xoa.php"> 
                                                  <input type="submit" name="action" value="xoa"/>
                                                  <input type="hidden" name="mshv" value="<?php echo $row['mshv']; ?>"/>
                                              </td>
                                              
                                              <!-- <a href="student-delete.php?id= #$row['mshv'] ?>" class="btn btn-danger">Delete</a> -->
                                              
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
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