<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
 <li class="breadcrumb-item active" aria-current="page"><a href='index.php'><i class="material-icons" style="color:green">check_circle_outline</i>LIST</a></li>
		<?php 
			if(isset($_GET['ci'])){	
				?>
					
					<li class="breadcrumb-item active" aria-current="page"><a href='index.php?ci=<?php echo $_GET['ci']; ?>'><?php getSelectedClassName($con,$_GET['ci']); ?></a></li>
				<?php				
				
			}if(isset($_GET['qi'],$_GET['ci'], $_GET['pi'])){
				?>
					
				
					<li class="breadcrumb-item active" aria-current="page"><a href='index.php?ci=<?php echo $_GET['ci']; ?>&qi=<?php echo $_GET['qi']; ?>'><?php getRoomName($con,$_GET['ci']); ?></a></li>
				<?php					
			}				
		?>
  </ol>
</nav>

<?php 
if(isset($_GET['ci'])){
	if(checkGroup($con,$_GET['ci']) == 0){
		echo "<h3 class='title'>class Not Found</h3>";
	}else{
		if(checkClassFaculty($con,$facultyID,$_GET['ci']) == 0){
			echo "<h3 class='title'>You're Not Member of This Class</h3>";
		}
		else if(isset($_GET['qi'])){
			?>
				<div class='result'>
					<h2 class='title'><?php getRoomName($con,$_GET['qi']); ?> &nbsp;&nbsp; |  FOR CHECKING/CHECKED BY:</h2>
					<?php roomResult($con,$_GET['qi'],$_GET['pi'],$_GET['ci']); ?>
				</div>
			<?php
		}
		else{
		
?>		
	<div class='classIn'>
		<div class='row' class='shadow-sm p-3 mb-5 bg-white rounded'>
			<div class='col-md-8'>
				<div class="card card-login"> 
					<div class="card-body"> 									 
						 <h3 class='title' style='float:left;'><?php getSelectedClassName($con,$_GET['ci']); ?></h3>
						 <br><br><br><br>
							<form method='post' id='postForm' action='ajaxProcess/addPost.php' enctype="multipart/form-data">
								 <div class='row'>
									<div class='col-md-12'>	
										 <input type='hidden' name='ci' id='ci' value='<?php echo $_GET['ci']; ?>'>
										 <textarea class='form-control' name='postText' id='postText' placeholder='Write as follows for checking (FORMAT: DATE TODAY_TIME)'></textarea>								 
									</div>
									<div class='col-md-2'>
										<label for='imageFile'>
											<h5 class='btn btn-round badge badge-pill badge-danger'><i class="fa fa-files-o"></i> &nbsp; Screenshot</h5>
										</label>
										<input type='file' id='imageFile' name='image[]' style='display:none;' multiple>
										<p style='display:none;' id='imF' class='badge badge-pill badge-secondary'><i class='fa fa-files-o'> </i> <small style='color:white;' id='fileTitleUpload'> </small></p>
									</div>
									
									<div class='col-md-2'>								
										<h5 class='btn btn-round badge badge-pill badge-secondary' id='gg'><i class="fa fa-files-o"></i> &nbsp;  Google meet link</h5>								
											<p style='display:none;' id='nu' class='badge badge-pill badge-secondary'><i class='fa fa-file'> </i> <small style='color:white;' id='roomTitleUpload'> </small></p>
											
										<input type='hidden' id='hiddenRoom' name='hiddenRoom' value=''>
									</div>
									<div class='col-md-4'>
										
									</div>
									<div class='col-md-2'>
										<button class='btn badge badge-pill badge-danger' name='post' id='postButton' type='submit'> Send to monitoring</button>
									</div>
									<div class='col-md-12'>							  
										 <hr>						 
									</div>
								</div>
							</form>
							
<form action="https://meet.google.com/aqr-ayet-vyu">


    <input type="submit"  class='btn btn-danger'value="GO TO CLASS" />
</form>
						<div class='row'>
							
							<div class="col-md-12" id='postWall'>
								
								<?php postWall($con,$_GET['ci']); ?>								
								
								
							</div>
						</div>
					</div>
				</div>
					
					  <div class="modal-dialog" id='wakata' style='z-index:1;position:fixed;top:20%;width:100%;left:35%;display:none;height:400px;overflow:auto;'>
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Select Subject</h5>							
						  </div>
						  <div class="modal-body" style='overflow:auto;height:300px;'>
							<table class='table table-striped' >
								<?php roomTableUpload($con,$_SESSION['faculty']); ?>
							</table>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" id='closeModal'>Close</button>							
						  </div>
						</div>
					  </div>
				
					
			</div>
			<div class='col-md-4'>
				<div class='row'>					
					<div class='col-md-12'>
						<div class="card card-login" style='height:300px;overflow:auto;'> 							
							  <div class="card-body"> 
									<div class="profile-tabs" style='position:relative;top:-40px;' >
									  <ul class="nav nav-pills nav-pills-icons " role="tablist">
										<li class="nav-item" style='padding:1px;'>
										  <a class="nav-link active"  href='#members' role="tab" data-toggle="tab">
										MONITORING
										  </a>
										</li>
										<<li class="nav-item">
										  <a class="nav-link"  role="tab" href='#pending' data-toggle="tab">
											 Pending &nbsp;&nbsp;<span class="badge badge-pill badge-secondary">
												<?php countPendingClassMember($con,$_GET['ci']); ?>
											 </span>
										  </a>
										</li> 
											
									  </ul>
									</div>
									
									<div class="tab-content tab-space">
										<div id='members' class='tab-pane active' style='position:relative;top:-50px;'>
											 <h4 class='title'><i class='fa fa-user' ></i> Faculty</h4>
											 <table class='table table-striped'>
												<tr>
													<td style='width:2px;'><i class='fa fa-circle' style='color:green;'></i></td>
													<td></h5><?php FacultyName($con,$facultyID); ?></h5></td>
												</tr>
											 </table>
											 <h4 class='title'><i class='fa fa-group'></i> MONITORING STAFF</h4>
											 <table class='table table-striped'>
												<?php tableClassMember($con,$_GET['ci']); ?>
											 </table>
										</div>
										
										<div id='pending' class='tab-pane' style='position:relative;top:-50px;'>											 
											 <h4 class='title'><i class='fa fa-group'></i> ACCEPT MONITORING</h4>
											 <table class='table table-striped' style='width:20vh;'>
												<form method='POST' action='ajaxProcess/pendingMembers.php'>
													<input type='hidden' name='classID' value='<?php echo $_GET['ci'];?>'>
													<tbody>
														<?php tablePendingClassMember($con,$_GET['ci']); ?>
													</tbody>
													<tfoot>
														<tr>
															<td><button type='submit' name='accept' class='btn btn-blue btn-sm'>ACCEPT <i class='fa fa-check'></i></button></td>
															<td><button type='submit' name='cancel' class='btn btn-danger btn-sm'>CANCEL <i class='fa fa-remove'></i></button></td>
														</tr>
													</tfoot>
												</form>
											 </table>
										</div>
									</div>
							  </div>
						  </div>
					</div>
					<div class='col-md-12'>
							<div class="card card-login" style='height:200px;'>			
								  <div class="card-body">										
										<div class="tab-content tab-space">
											<div id='members' class='tab-pane active' style='position:relative;top:-50px;'>
												 <h4 class='title'><i class='fa fa-list'></i> Ask monitoring for concern/s</h4>											 
													<div style='height:100px;overflow-x:hidden;overflow-y: scroll;padding:10px;' id='chatbox' >
														<?php forumChatBox($con,$_GET['ci'],$_SESSION['faculty']); ?>
															
													</div>
												 <input type='text' class='form-control' placeholder='Message your monitoring here' id='msgText'>
												 <input type='hidden' class='form-control'  id='classIDhh' value='<?php echo $_GET['ci']; ?>'>
												 <input type='hidden' class='form-control'  id='facultyIDhh' value='<?php echo $_SESSION['faculty']; ?>'>
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
	}
}

else{
?>
<div id='classForm'>
	<div class='row'>	
		<div class='col-md-5'>
			<select class='form-control' id='section'>
				<?php Section($con)?>
			</select>
		</div>
		<div class='col-md-5'>
			<select class='form-control' id='subject'>
				<?php subject($con)?>
			</select>
			
		</div>
		<div class='col-md-2'>
			<button class='btn btn-primary' id='addClass'><i class='fa fa-plus' ></i></button>
		</div>
	</div>
</div>
<div id='classTable'>
	<div class='row'>
		<div class='col-md-12'>
			<table class='table table-striped '>
				<tr>
					<th style='width:10vh;'>ROOM ID</th>
					<th style='width:100vh;'>ROOM/DEPARTMENT/SUBJECT/TIME</th>
					<th style='width:10vh'>MONITORING STAFF</th>					
					<th style='width:10vh'></th>					
				</tr>	
				<tbody id='classTBody'>
					<?php classTable($con,$_SESSION['faculty']); ?>
			
				</tbody>
			</table>
		</div>
	</div>	
</div>

	<?php } ?>