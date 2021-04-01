<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';


		
		if(isset($_GET['id'])){
		$ci = $_GET['ci'];
		$id = $_GET['id'];
			mysqli_query($con,"DELETe from post where postID = '$id'");
			mysqli_query($con,"DELETE from postAttachment where postID = '$id'");
			header("location:../index.php?ci=$ci");		
		}
		
?>