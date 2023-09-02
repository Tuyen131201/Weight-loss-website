<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;
    // $id =  $_POST['mshv'];
    $sql = "select * FROM hocvien WHERE mshv='mshv'";
    
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
?>
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
              <li class="breadcrumb-item active">Học viên</li>
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
                        <h3>Sửa học viên"  
                            <a href="student.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="./student-edit.php?action=edit" method="Post" autocomplete="off">
                            <div class="mb-3">
                                <label>Tên học viên</label>
                                <input type="hidden" name = "mshv" value="<?echo $row['mshv']; ?>" class="form-control">
                                <input type="text" name = "tenHV" value="" class="form-control">
                            </div>
        
                            <div class="mb-3">
                                <label>Giới tính</label>
                                <div>
                                    <input type="radio" id = "gioitinh" name = "gioitinh" value = "">
                                    <label for="female">Nữ</label>
                                    </div>
                                    <div>
                                    <input type="radio" id = "gioitinh" name = "gioitinh" value = "">
                                    <label for="male">Nam</label>
                                    </div>
                            </div>
                            <div class="mb-3">
                                    <label>Ngày sinh</label>
                                    <input type="date" name = "ngaysinh" value="" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                    <label>Số điện thoại</label>
                                    <input type="text" name = "sdt" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                    <label>Địa chỉ</label>
                                    <input type="text" name = "diachi" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                    <label>IDkhoahoc</label>
                                    <input type="text" name = "IDkhoahoc" value="" class="form-control">
                            </div>
                            <div class="mb-3">
                                    <label>Tên khoa hoc</label>
                                    <input type="text" name = "tenkhoahoc" value="" class="form-control">
                            </div>
                            <div class="mb-3 text-center">
                                    <button type="submit" name="save_submit_btn" value="edit" class="btn btn-primary ">Save </button>
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
