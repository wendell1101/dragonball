<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href='../index.php' style="color:#c2c2a3;">CHECK ONLINE MONITORING
</a></li>
		<?php 
			if(isset($_GET['qi'])){
				$base = 'index.php';
				?>
					
					<li class="breadcrumb-item active" aria-current="page"><a><?php getSelectedRoomName($con,$_GET['qi']); ?></a></li>
				<?php
			}
		?>
  </ol>
</nav>

<?php 
if(isset($_GET['qi'])){
	if(checkRoom($con,$_GET['qi']) == 0){
		echo "<h3 class='title'>ATTENDANCE NOT FOUND!</h3>";
	}else{
		if(checkRoomFaculty($con,$facultyID,$_GET['qi']) == 0){
			echo "<h3 class='title'>ATTENDANCE NOT YOURS</h3>";
		}else{
		
?>	
		
		<div class='row' id='questionaire'>
			<div class='col-md-12'>
				 <div class="alert alert-danger" style='display:none;' id='errorms'>
					<div class="container">
					  <div class="alert-icon">
						<i class="material-icons">warning</i>
					  </div>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					  </button>
							<p id='errormsg'></p>
					</div>
				  </div>
				<div class='row'>
					<div class='col-md-3'>
						<select id='roomType' name='roomType' class='form-control'>
							<option > Select Present to activate attendance </option>
							<?php selectRoomType($con); ?>
						</select>
					</div>
					<div class='col-md-9'>	
						<input type='text' class='form-control' placeholder='PLEASE PASTE YOUR GOOGLE MEET LINK HERE' name='question' id='question'>
					</div>
					
				</div>
				<input type='hidden' class='form-control'  name='roomID' id='roomID' value='<?php echo $_GET['qi']; ?>'>
			</div>
			<div class='col-md-12'>
				<div class='row' id='sonata'>
					
				</div>
			</div>
			<div class='col-md-2'>			
				<button class='btn btn-primary' id='addQuestion'><i class='fa fa-plus'></i></button>
			</div>
		</div>
		<div class='Attendance' id='roomWall'>			
				<?php roomWall($con,$_GET['qi']); ?>			
		</div>
<?php
		}
	}
}else{
?>
<div id='roomForm'>	

			<div class='row'>
			
				<!--PINALITAN KO NG SELECTION--<div class='col-md-6'>
					<input type='text' class='form-control' placeholder='ADD SUBJECT' id='roomTitle'>
				</div> ---->
				
<select id='roomTitle' name='roomTitle' class='form-control'>
<option value=''> ADD DAY/TIME AND SUBJECT</option>
						
<option value='Monday- 7:30-12:30 CC 106-Application and Emerging Technology - BSCS '> Monday- 7:30-12:30 CC 106-Application and Emerging Technology - BSCS </option>
<option value='A2019 Monday-2:00-5:00 Comp 2 -Business Software Application-BS Entrep  '> A2019 Monday-2:00-5:00 Comp 2 -Business Software Application-BS Entrep  </option>


							  </select>
				
				
				
				
				
				
				
				
				
				
				
				<div class='col-md-4'>
					<input type='number' class='form-control' placeholder='SUBJECT TIME TO MINUTES ' id='minutes'>
				</div>
				<div class='col-md-2'>
					<button class='btn btn-primary' id='addRoomButton'><i class='fa fa-plus' ></i></button>
				</div>			
			</div>
	
</div>
<div id='classTable'>
	<div class='row'>
		<div class='col-md-12'>
			<table class='table table-striped '>
				<tr>
					<th style='width:10vh;'>SUBJECT ID</th>
					<th style='width:100vh;'>PLEASE CLICK ON THE SUBJECT/S BELOW TO INSERT THE GOOGLE MEET LINK</th>								
					<th style='width:10vh'></th>					
				</tr>	
				<tbody id='roomTBody'>
					<?php roomTable($con,$_SESSION['faculty']); ?>
				</tbody>
			</table>
		</div>
		
	</div>	
</div>

<?php } ?>