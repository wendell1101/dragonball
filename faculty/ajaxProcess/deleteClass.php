<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';


		
		if(isset($_GET['id'])){		
		$id = $_GET['id'];
			mysqli_query($con,"DELETe from class where classID = '$id'");
			mysqli_query($con,"DELETE from post where class = '$id'");
			mysqli_query($con,"DELETE from classmember where classID = '$id'");
		
			header("location:../index.php");		
		}
		
?>