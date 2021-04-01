<?php	
	
	if(!isset($_SESSION['monitoring'])){
		header("location:../index.php");
	}else{
		$monitoringID = $_SESSION['monitoring'];
	}
	
?>