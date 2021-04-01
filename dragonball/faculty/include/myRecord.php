ATTENDANCE VIEWED BY:<!----     <nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href='record.php'>Home</a></li>
		<?php 
			///if (isset($_GET['ai'])){
				/// $base = 'index.php';
				?>
					
					<li class="breadcrumb-item active" aria-current="page"><a><?php getSelectedExamName($con,$_GET['ai']); ?></a></li>
				<?php
			}
		?>
  </ol>
</n	av>

<?php 
//if(isset($_GET['ai'])){
	//if(checkExam($con,$_GET['ai']) == 0){
		//echo "<h3 class='title'>Assessment Exam Not Found</h3>";
	//}else{
		//if(checkExamFaculty($con,$facultyID,$_GET['ai']) == 0){
			///echo "<h3 class='title'>Room ID is Not Yours</h3>";
		//}else{
		
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
							<option>SELECT Exam TypeZ</option>
							<?php selectRoomType($con); ?>
						</select>
					</div>
					<div class='col-md-9'>	
						<input type='text' class='form-control' placeholder='Question' name='question' id='question'>
					</div>
					
				</div>
				<input type='hidden' class='form-control'  name='assessmentID' id='assessmentID' value='<?php echo $_GET['ai']; ?>'>
			</div>
			<div class='col-md-12'>
				<div class='row' id='sonata'>
					
				</div>
			</div>
			<div class='col-md-2'>			
				<button class='btn btn-primary' id='addQuestionAss'><i class='fa fa-plus'></i></button>
			</div>
		</div>
		<div class='Attendance' id='examWall'>			
				//////<?php// examWall($con,$_GET['ai']); ?>			
		</div>
<?php
		//}
	//}
//}else{
?>
<div id='examForm'>	

			<div class='row'>		
				<div class='col-md-6'>
					<input type='text' class='form-control' placeholder='Assessment Exam' id='examTitle'>
				</div>
				<div class='col-md-4'>
					<input type='number' class='form-control' placeholder='Minutes' id='minutes'>
				</div>
				<div class='col-md-2'>
					<button class='btn btn-primary' id='addExamButton'><i class='fa fa-plus' ></i></button>
				</div>			
			</div>
	
</div>
<div id='classTable'>
	<div class='row'>
		<div class='col-md-12'>
			<table class='table table-striped '>
				<tr>
					<th style='width:10vh;'>Exam ID</th>
					<th style='width:100vh;'>Assessment Exam</th>								
					<th style='width:10vh'></th>					
				</tr>	
				<tbody id='examTBody'>
					<?php //examTable($con,$_SESSION['faculty']); ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>

<?php //} ?>