<?php	
	
	if(!isset($_SESSION['admin'])){
		header("location:../index.php");
	}else{
		$admin = $_SESSION['admin'];
	}
	
?>