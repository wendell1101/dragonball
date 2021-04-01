<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';

		$pending = $_POST['pending'];
		
		if(isset($_POST['accept'])){
		$ci = $_POST['classID'];
			for ($i=0; $i<sizeof($pending); $i++){
					mysqli_query($con,"UPDATE classmember set status ='1' where cmID ='". $pending[$i] ."'");
				}
			echo "<script>alert('Success Approval')<script>";
			header("location:../index.php?ci=$ci");

		
		}
		if(isset($_POST['cancel'])){
		$ci = $_POST['classID'];
			for ($i=0; $i<sizeof($pending); $i++){
					mysqli_query($con,"delete from classmember where cmID = '". $pending[$i] ."'");
				}
			echo "<script>alert('Success Cancelation')<script>";
			header("location:../index.php?ci=$ci");

		
		}
?>