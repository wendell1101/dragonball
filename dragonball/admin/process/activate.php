<?php
	include '../../include/function.php';
	include '../../include/sessionA.php';
	
	if(isset($_GET['id'])){
		$ac = $_GET['ac'];
		$id = $_GET['id'];
		if($ac == 0){
			$ac = $ac + 1;
		}else{
			$ac = $ac - 1;
		}
			mysqli_query($con,"UPDATE faculty set status = '$ac' where facultyID = '$id'");
			header("location:../faculty.php");
	}
?>