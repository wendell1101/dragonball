<?php	
	
	if(!isset($_SESSION['faculty'])){
		header("location:../index.php");
	}else{
		$facultyID = $_SESSION['faculty'];
	}
	
?>