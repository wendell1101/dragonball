<nav aria-label="breadcrumb" >
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href='index.php'><i class="material-icons " style="color:green;">check_circle_outline</i> Home</a></li>
		<?php 
			if(isset($_GET['qi'])){				
				?>
					
					<li class="breadcrumb-item active" aria-current="page"><a><?php getRoomName($con,$_GET['qi']); ?></a></li>
				<?php
			}
		?>
  </ol>
</nav>

<?php 
if(isset($_GET['qi'])){
	if(checkRoom($con,$_GET['qi']) == 0){
		echo "<h3 class='title'>TIMER not Found</h3>";
	}else{		
?>
		<div class='roomIn'>
			<div class='row' class='shadow-sm p-3 mb-5 bg-white rounded'>
				<div class='col-md-12'>
					<div class="card card-login"> 
						<div class="card-body"> 									 
							<?php getRoomName($con,$_GET['qi']); ?>	
							
							
							<?php roomResultIndividualDetails($con,$_SESSION['monitoring'],$_GET['qi'],$_GET['qti']); ?>
						</div>
					</div>
					
				</div>				
			</div>
		</div>
		
		
	<?php
		
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
		
		<div class='col-md-12'>
			<table class='table table-striped '>
				<tr>
					<th style='width:10vh;'>TODAY</th>
					<th style='width:100vh;'>DEPARTMENT</th>									
					<th style='width:10vh'>FACULTY NAME</th>					
										
				</tr>	
				<tbody id='classTBody'>
					<?php roomResultIndividual($con,$_SESSION['monitoring']); ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>

	<?php } ?>

	
	
	