<?php 

	include '../include/function.php';
	include '../include/sessionS.php';	
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../include/head.php';?>

<body class="profile-page sidebar-collapse">
	<?php include '../include/snav.php'; ?>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/phot/logs3.jpg');"></div>
  <div class="main main-raised" STYLE='border-style:solid;border-color:#c2c2a3'>
    <div class="profile-content">
      <div class="container">
         <?php include 'include/monitoringData.php'; ?>
        <div class="description text-center">
        
        </div>
       <?php include 'include/monitoringNav.php'; ?>
        <div class="tab-content tab-space">		
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
				<div class="col-md-12 ml-auto">
					<?php include 'include/myRoom.php'; ?>
				</div>
            </div>
          </div>
		 
        </div>
      </div>
    </div>
  </div>
 <?php include '../include/footer.php'; ?>
  <?php include 'include/js.php'; ?>
  
  
  <!--PARASAANTO? WALA TO KANINA--->
    <?php include 'include/phpJScript.php'; ?>
</body>

</html>
