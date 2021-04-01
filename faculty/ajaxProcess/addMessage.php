<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['classID'])){
		$classID = $_POST['classID'];
		$message = $_POST['message'];
		$sender = $_SESSION['faculty'];
		
			mysqli_query($con,"INSERT into forum (message,sender,classID,type) VALUES ('$message','$sender','$classID','2')");
			
	}
?>