<?php
	include '../../include/function.php';
	include '../../include/sessionA.php';
	
	if(isset($_GET['id'])){		
		$id = $_GET['id'];
		
			mysqli_query($con,"Delete from class where classID = '$id'");
			header("location:../class.php");
	}
?>