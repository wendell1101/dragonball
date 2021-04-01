<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href='index.php'><i class="material-icons" style="color:green">check_circle_outline</i>SCHEDULE</a></li>
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

<?php 
if(isset($_GET['ci'])){
	if(checkGroup($con,$_GET['ci']) == 0){
		echo "<h3 class='title'>Class not Found</h3>";
	}else{
		if(checkMember($con,$monitoringID,$_GET['ci']) == 0){
			echo "<h3 class='title'>You're Not Member of This Class</h3>";
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
								
								<div class="col-md-12" id='postWall' style=''>
									<?php postWallMonitoring($con,$_GET['ci']); ?>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class='col-md-4'>
					<div class='row'>					
						<div class='col-md-12'>
							<div class="card card-login" style='height:200px;overflow:auto;'> 							
								  <div class="card-body"> 
										
										
										<div class="tab-content tab-space">
											<div id='members' class='tab-pane active' style='position:relative;top:-50px;'>
												 <h4 class='title'><i class='fa fa-group'></i> FACULTY</h4>
												 <table class='table table-striped'>
													<tr>
														<td style='width:5px;'><i class='fa fa-circle' style='color:green;'></i></td>
														<td></h5><?php getFacultyInClass($con,$_GET['ci']); ?></h5></td>
													</tr>
												 </table>
												 <h4 class='title'><i class='fa fa-laptop'></i> MONITORING STAFF</h4>
												 <table class='table table-striped'>
													<?php tableClassMemberSV($con,$_GET['ci']); ?>
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
												 <h4 class='title'><i class='fa fa-list'></i> FACULTY CONCERN/S</h4>											 
													<div style='height:100px;overflow-x:hidden;overflow-y: scroll;padding:10px;' id='chatbox' >
														<?php forumChatBox($con,$_GET['ci'],$_SESSION['monitoring']); ?>
																										
													</div>
												 <input type='text' class='form-control' placeholder='Message Here' id='msgText'>
												 <input type='hidden' class='form-control'  id='classIDhh' value='<?php echo $_GET['ci']; ?>'>
												 <input type='hidden' class='form-control'  id='monitoringIDhh' value='<?php echo $_SESSION['monitoring']; ?>'>
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
}else{
?>
<div id='classForm'>
	<div class='row'>			
		<div class='col-md-12'>
			
			<hr>
		</div>		
	</div>
</div>
<div id='classTable'>
	<div class='row'>
		<div class='col-md-4'>
			<div class="card card-login" style='padding:10px;height:400px;'>
				<div class="card-body"> 
					<div class='row'>
						<div class='col-md-9'>
							<input type='text' class='form-control' placeholder='Search FACULTY' id='classSearchID'>
						</div>
						<div class='col-md-3'>
							<button class='btn btn-primary' id='classSearchButton'><i class='fa fa-search' ></i></button>
						</div>
						
						<div class='col-md-12' id='resultClass'>
							
						</div>
					</div>					
				</div>
			</div>
		</div> 
		<div class='col-md-8'>
			<table class='table table-striped '>
				<tr>
					<th style='width:10vh;'>ROOM ID</th>
					<th style='width:100vh;'>DEPARTMENT</th>
					<th style='width:10vh'>FACULTY NAME</th>
					<th style='width:10vh'>MONITORING LOGS</th>					
					<th style='width:10vh'></th>					
										
				</tr>	
				<tbody id='classTBody'>
					<?php classTableMonitoringView($con,$monitoringID); ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>

	<?php } ?>

	
	
	