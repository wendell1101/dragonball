<?php
	include '../../include/function.php';
	include '../../include/sessionS.php';
	
	if(isset($_GET['ci'])){
		$classID = $_GET['ci'];		
		$monitoring = $_SESSION['monitoring'];
		
			$a = mysqli_query($con,"INSERT into classmember (classID,member,status,active) VALUES ('$classID','$monitoring','0','0')");
			header('location:../index.php');
	}
?>