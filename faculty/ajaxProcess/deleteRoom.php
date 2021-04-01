<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';


		
		if(isset($_GET['id'])){		
		$id = $_GET['id'];
			mysqli_query($con,"DELETe from room where roomID = '$id'");
			mysqli_query($con,"DELETE from postAttachment where file = '$id'");
			mysqli_query($con,"DELETE from roomattendance where roomID = '$id'");
			mysqli_query($con,"DELETE from roomresult where roomID = '$id'");
			mysqli_query($con,"DELETE from roomtake where roomID = '$id'");
			header("location:../room.php");		
		}
		
?>