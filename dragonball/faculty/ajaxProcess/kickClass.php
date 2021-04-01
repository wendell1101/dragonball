<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';


		
		if(isset($_GET['id'])){		
			$id = $_GET['id'];
			$ci = $_GET['ci'];
			mysqli_query($con,"DELETe from classmember where cmID = '$id' and classID = '$ci' and status='1'");
			
		
			header("location:../index.php?ci=$ci");		
		}
		
?>