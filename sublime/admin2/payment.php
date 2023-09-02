<?php
  session_start();
?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 texxt-dark">Thanh toán</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Thanh toán</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<style>
		
		.li_color{
			list-style: none;
			border : 2px solid grey;
			padding: 10px;
			width : 500px;
			margin-bottom: 10px;
			margin-left : 350px;
			

		}
		.text-blue{
			color: blue;
		}
		.text-bold{
			font-weight: bold;
		}
	</style>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
          <!-- Info boxes -->
            <div class="row">
              <div class="col-md-12 mt-4">
					<div >
						<h3 class="text-center text-bold">Thông tin thanh toán</h3><br>
						<div >
							<ul>
								<li class = "li_color">
									<h6 class="text-blue">Ngân hàng Agribank</h6> 
									<p class = "text-bold">Tên chủ sở hữu: Phan Thị Thanh Thùy</p>
									<p class = "text-bold">Số tài khoản: 1040505052325</p>
								</li>
								<li class = "li_color">
									<h6 class="text-blue">Ngân hàng Techcombank</h6> 
									<p class = "text-bold">Tên chủ sở hữu: Mai Lê Bích Tuyền</p>
									<p class = "text-bold">Số tài khoản: 0593561243454</p>
								</li>
								<li class = "li_color">
									<h6 class="text-blue">Ngân hàng Viettinbank</h6> 
									<p class = "text-bold">Tên chủ sở hữu: Huỳnh Ngọc Tuyết</p>
									<p class = "text-bold">Số tài khoản: 0405052567890</p>
								</li>
						
							</ul>
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