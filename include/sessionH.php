<?php	
	
	if(isset($_SESSION['monitoring'])){
		header("location:monitoring/index.php");
	}else if(isset($_SESSION['faculty'])){
		header("location:faculty/index.php");
	}else if(isset($_SESSION['admin'])){
		header("location:home.php");
	}
?>