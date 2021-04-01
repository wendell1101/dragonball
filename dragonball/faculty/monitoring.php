<?php 

	include '../include/function.php';
	include '../include/sessionT.php';
	
	
	
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../include/head.php';?>

<body class="profile-page sidebar-collapse">
	<?php include '../include/nav.php'; ?>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/phot/logs3.jpg');"></div>
  <div class="main main-raised" STYLE='border-style:solid;border-color:#c2c2a3'>
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
               <?php include 'include/facultyData.php'; ?>
              </div>
             
            </div>
          </div>
        </div>
        <div class="description text-center">
        
        </div>
		<?php include 'include/facultyNav.php'; ?>
        <div class="tab-content tab-space">		
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
				<div class="col-md-12 ml-auto">
					<?php include 'include/myMonitoring.php'; ?>
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
