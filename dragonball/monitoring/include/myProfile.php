<div class='row'>
	<div class='col-md-12'>
		<?php profileMonitoring($con,$_SESSION['monitoring']);?>
	</div>
</div>



<?php
	function profileMonitoring($con,$monitoringID){
		$a = mysqli_query($con,"SELECt * from monitoring where monitoringID = '$monitoringID'");
			while($row = mysqli_fetch_array($a)){
				?>
				<form method='post' action='ajaxProcess/addPicture.php' enctype="multipart/form-data">
					<div class='row'>
						<div class='col-md-12'>
							<label for='profilePic'>
								<img id='dpPreview' class='img-raised rounded-circle img-fluid' style='width:150px;height:150px;' src='../assets/img/upload/img/<?php echo $row['img']; ?>'>	
							</label>
							<input type='file' name='profilePic' id='profilePic' style='display:none'>
						</div>	
						<div class='col-md-12'>
							<button class='btn btn-primary btn-sm' id='updateImageButton' style='display:none;'>Update Image</button>
							<label for="exampleInputEmail1">EDIT PROFILE</label>
							<button type='button' class='btn btn-danger btn-sm' id='cancelImageUpload' style='display:none;'>Cancel</button>
						</div>
					</div>
				</form>
				
				<form method='post' action='ajaxProcess/updateProfile.php'>	
					<div class='row'>
					
						
						
						<div class='col-md-4'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">check_circle</i>
								</span>
							  </div>
							  <input type="text" name ='middlename' class="form-control" placeholder="Middlename" value='<?php echo $row['middleName']?>'>
							</div>
							<label for="exampleInputEmail1">Middle name</label>
						</div>
						
						<div class='col-md-4'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">check_circle</i>
								</span>
							  </div>
							  <input type="text" name='lastname' class="form-control" placeholder="Lastname" value='<?php echo $row['lastName']?>'>
							</div>
							
							<label for="exampleInputEmail1">Last name</label>
						</div>				
						
						
					</div>
					
					<div class='col-md-12'><br></div>
						 <center>
							<button type='submit' name='UpdateProfile' class='btn btn-success btn-sm' style='width:200px;'>Update</button>							
						</center>	
				</form>
				<?php	
			}
	}

?>
