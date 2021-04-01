<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';


		
		if(isset($_GET['id'])){		
		$id = $_GET['id'];
			mysqli_query($con,"DELETe from assessment where assessmentID = '$id'");
			mysqli_query($con,"DELETE from assessmentForm where assessmentID = '$id'");
			
			header("location:../record.php");		
		}
		
?>