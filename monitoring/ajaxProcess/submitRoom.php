<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
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
				
				mysqli_query($con,"INSERT into roomresult (answer,roomID,monitoring,correct,questionID,roomTakeID) 
															VALUES 
														   ('$choice','$roomID','$monitoring','$correct','$questionID','$roomTakeID')");
														  
			}
		mysqli_query($con,"UPDATE roomtake set status='2' where roomTakeID = '$roomTakeID'");	
		
	
		header('location:../index.php?ci='.$_GET['ci']);
				
	}
?>