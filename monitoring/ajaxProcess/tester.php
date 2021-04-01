<?php
	include '../../include/function.php';

	
	if(isset($_POST['submitRoom'])){
		
		$monitoring = $_SESSION['monitoring'];
		$roomID = $_POST['roomID'];
		$items = getItems($con,$roomID);		
		$roomTakeID = $_POST['roomTakeID'];
		
		$a = mysqli_query($con,"SELECT * from roomattendance where roomID = '$roomID'");
			$i = 0;
			while($row = mysqli_fetch_array($a)){
				$i++;
				$questionID = $row['raID'];
				$answer = 'answer'.$i;
				
				$choice = $_POST[$answer];				
				$correct = $row['correct'];
				
				
				
					echo $choice;						  
			}
		
		
	
		
				
	}
?>