<?php include '../include/function.php';?>
<html lang="en">

<?php include 'include/head.php';?>

<body id="page-top">

 
  <div id="wrapper">

	<?php include 'include/sidebar.php';?>
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

       
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
         

        
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

           
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php adminName($con,$_SESSION['admin']); ?></span>
                <img class="img-profile rounded-circle" src="../assets/img/upload/DIONICOJURADA.png">
              </a>
             
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>              
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
       
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Class</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          

          <div class="row">

           <nav aria-label="breadcrumb" >
			  <ol class="breadcrumb" style=''>
				<li class="breadcrumb-item active" aria-current="page"><a href='class.php'>Home</a></li>
					<?php 
						if(isset($_GET['ci'])){
							$base = 'index.php';
							?>
								
								<li class="breadcrumb-item active" aria-current="page"><a><?php getSelectedClassName($con,$_GET['ci']); ?></a></li>
							<?php
						}
					?>
			  </ol>
			</nav>
            

           
            <div class="col-lg-12">
			
			<?php 
if(isset($_GET['ci'])){
	if(checkGroup($con,$_GET['ci']) == 0){
		echo "<h3 class='title'>Class not Found</h3>";
	}else{
		
?>
		<div class='classIn'>
			<div class='row' class='shadow-sm p-3 mb-5 bg-white rounded'>
				<div class='col-md-8'>
					<div class="card card-login"> 
						<div class="card-body"> 									 
							 <h3 class='title' style='float:left;'><?php getSelectedClassName($con,$_GET['ci']); ?></h3>
							 <br><br><br><hr>
							 
							
							<div class='row'>
								
								<div class="col-md-12" id='postWall'>
									<?php  postWallAdminView($con,$_GET['ci']); ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class='col-md-4'>
					<div class='row'>					
						<div class='col-md-12'>
							<div class="card card-login"> 							
								  <div class="card-body"> 
										
										
										<div class="tab-content tab-space">
											<div class="card-body">
												 <h4 class='title'><i class='fa fa-graduation-cap'></i> Faculty</h4>
												 <table class='table table-striped'>
													<tr>
														<td style='width:5px;'><i class='fa fa-circle' style='color:green;'></i></td>
														<td></h5><?php getFacultyInClass($con,$_GET['ci']); ?></h5></td>
													</tr>
												 </table>
												 <h4 class='title'><i class='fa fa-group'></i> Monitoring</h4>
												 <table class='table table-striped'>
													<?php tableClassMemberSV($con,$_GET['ci']); ?>
												 </table>
											</div>									
											
										</div>
								  </div>
							  </div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	<?php
		
	}
}else{?>
              <div class="card shadow mb-4">
                
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-danger">Manage Class</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <!-- <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
					<table class='table'>
						<tr>
							<th>Class ID</th>
							<th>Name</th>
							<th>Faculty</th>
							<th>Monitoring</th>
							<th>
								
							</th>							
						</tr>
						<tbody>
							<?php classTableAdminView($con); ?>
						</tbody>
					</table>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
<?php } ?>        

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

 <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/index.js" type="text/javascript"></script>

</body>

</html>
