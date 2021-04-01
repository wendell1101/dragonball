<?php 
	if(isset($_GET['si'])){
?>
	<div class='row'>	
		<div class='col-md-12'>
			<?php profileMonitoring($con,$_GET['si']);?>
		</div>
	</div>
<?php
	}else{
?>
	<div class='row'>	
		<div class='col-md-12'>
			<div id='classTable'>
				<div class='row'>
					<div class='col-md-12'>
						<table class='table table-striped '>
							<tr>
							
								<th style='width:10vh;'><span class="material-icons">check_circle   MONITORING ID</span></th>
								
							<th style='width:10vh;'><span class="material-icons">face  MONITORING STAFF</span></th>									
													
							</tr>	
							<tbody id='classTBody'>
								<?php tableMyMonitoring($con,$_SESSION['faculty']); ?>
							</tbody>
						</table>
					</div>
				</div>	
			</div>
			
		</div>
	</div>
	<?php }




function profileMonitoring($con,$monitoringID){
		$a = mysqli_query($con,"SELECt * from monitoring inner join section on section.sectionID = monitoring.section where monitoringID = '$monitoringID'");
			while($row = mysqli_fetch_array($a)){
				?>
				
					<div class='row'>
						<div class='col-md-12'>							
								<img class='img-raised rounded-circle img-fluid' style='width:300px;height:300px;' src='../assets/img/upload/img/<?php echo $row['img']; ?>'>
						</div>							
					</div>	
					<div class='row'>
						<div class='col-md-12'>
							<div class="name">
								<h3 class="title"><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></h3>
								<h6><?php echo $row['section']; ?></h6>
							</div>							
						</div>	
						<div class='col-md-12'>
							<hr>
								<div class='row'>
						
									<div class='col-md-12'>
										<h3 class='title'>MY RECORD</h3>
									</div>
									<div class='col-md-6'></div>
									<div class='col-md-12'>
									   
									<table class='table table-striped'>
											<tr>
												<th>DEPARTMENT <th>
												<th>ATTENDANCE</th>
												<th>RESULT</th>
											</tr>
											<?php roomResultRecords($con,$_GET['si'],$_SESSION['faculty']); ?>
									</table>
									</div>
								</div>							
						<div>
					</div>				
				<?php	
			}
	}


	?>
	
	
	
	
	
