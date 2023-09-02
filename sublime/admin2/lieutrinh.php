<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ;?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Thực đơn</h1>
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
            <div class="card">
                    <div class="card-header">
                        <h3>Thêm thực đơn
                            <a href="thucdon.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                      
<form class="form-horizontal" method= "post" action = "new.php">
			<fieldset>

			<!-- Form Name -->
			<legend>Thêm liệu trình giảm cân</legend>

			
			<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="corcode">Mã liệu trình </label>  
				  <div class="col-md-5">
				  <input id="corcode" name="calo_id" type="text" placeholder="" class="form-control input-md" required="">	
				  </div>
				</div>
				
			
			<!-- Text input-->
			<div class="mb-3">
                                <label> BMI </label> <br>
                                <select class="" name="bmi_id" id="bmi_id" >
                                  <option value ="">Chọn chỉ số BMI</option>
                                
                                  <?php
                                  // Feching active categories
                                  $ret=mysqli_query($conn,"SELECT bmi_id, chiso from  bmi");
                                  while($result=mysqli_fetch_array($ret))
                                  {    
                                  ?>
                                  <option value="<?php echo htmlentities($result['bmi_id']);?>"><?php echo htmlentities($result['chiso']);?></option>
                                  <?php } ?>
                                </select>
                            </div>

				<div class="mb-3">
                                <label> Thực đơn </label> <br>
                                <select class="" name="thucdon_id" id="thucdon_id" >
                                  <option value ="">Chọn thực đơn</option>
                                
                                  <?php
                                  // Feching active categories
                                  $ret=mysqli_query($conn,"SELECT thucdon.thucdon_id, thucpham.thucpham_ten  from  thucdon, thucpham where thucdon.thucpham_id= thucpham.thucpham_id");
                                  while($result=mysqli_fetch_array($ret))
                                  {    
                                  ?>
                                  <option value="<?php echo htmlentities($result['thucdon_id']);?>"><?php echo htmlentities($result['thucpham_ten']);?></option>
                                  <?php } ?>
                                </select>
                            </div>

				<!-- Text input-->
				<div class="mb-3">
                                <label> Hoạt Động </label> <br>
                                <select class="" name="bttd_id" id="bttd_id" >
                                  <option value ="">Chọn hoạt động</option>
                                
                                  <?php
                                  // Feching active categories
                                  $ret=mysqli_query($conn,"SELECT bttd_id, bttd_ten from  hoatdong");
                                  while($result=mysqli_fetch_array($ret))
                                  {    
                                  ?>
                                  <option value="<?php echo htmlentities($result['bttd_id']);?>"><?php echo htmlentities($result['bttd_ten']);?></option>
                                  <?php } ?>
                                </select>
                            </div>


				<div class="form-group">
				  <label class="col-md-4 control-label" for="room">Tổng lượng calo giảm </label>  
				  <div class="col-md-5">
				  <input id="room" name="tong_calo_giam" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-4 control-label" for="subcode">Tổng lượng calo nạp</label>  
				  <div class="col-md-5">
				  <input id="subcode" name="tong_calo_nap" type="text" placeholder="" class="form-control input-md" required="">
					
				  </div>
				</div>

				
				
				<!-- Button -->
			<div class="form-group"  align="right" >
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-5">
				<button id="submit" name="submit" class="btn btn-success">Thêm liệu trình</button>
			  </div>
			</div>

			</fieldset>
			</form>