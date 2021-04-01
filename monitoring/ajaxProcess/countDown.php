<?php
	include '../../include/function.php';
	include '../../include/sessionS.php';
	
	
							
				if(isset($_POST['timer'])){
					$timer = $_POST['timer'];
					$roomTakeID = $_POST['roomTakeID'];					
					mysqli_query($con,"UPDATE roomTake set time = '$timer' where roomTakeID = '$roomTakeID'");
					
					if($timer <= 0){
						mysqli_query($con,"UPDATE roomTake set status = '2' where roomTakeID = '$roomTakeID'");
					}
					
				}

	
	
?>