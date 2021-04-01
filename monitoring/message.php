<?php 

	include '../include/function.php';
	include '../include/sessionS.php';
	
	
	
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../include/head.php';?>

<body class="profile-page sidebar-collapse">
	<?php include '../include/snav.php'; ?>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/phot/logs3.jpg') ;"></div>
  <div class="main main-raised" STYLE='border-style:solid;border-color:#c2c2a3'>
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="../assets/img/tcu_logo.png" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title"><?php monitoringName($con,$monitoringID); ?></h3>
                <h6>MONITORING</h6>
                </div>
            </div>
          </div>
        </div>
        <div class="description text-center">
        
        </div>
        <?php include 'include/monitoringNav.php'; ?>
        <div class="tab-content tab-space">		
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
				<div class="col-md-12 ml-auto">
					<?php include 'include/myMessage.php'; ?>
				</div>
            </div>
          </div>
		 
        </div>
      </div>
    </div>
  </div>
 <?php include '../include/footer.php'; ?>
  <?php include 'include/js.php'; ?>
</body>

</html>
