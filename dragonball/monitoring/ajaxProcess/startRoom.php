<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_GET['qi'])){
		$qi = $_GET['qi'];
		$postID = $_GET['postID'];
		$ci = $_GET['ci'];
		$monitoring = $_SESSION['monitoring'];
		$timer = roomTime($con,$qi);
		
		mysqli_query($con,"INSERT into roomtake (roomID,monitoring,status,postID,result,items,classID,time) VALUES ('$qi','$monitoring','1','$postID','0','100','$ci','$timer')");
		
		
		header('location:../index.php?ci='.$ci);
				
	}
	
	function roomTime($con,$roomID){
		$a = mysqli_query($con,"SELECT timer from room where roomID = '$roomID'");
			while($row = mysqli_fetch_array($a)){
				return $row['timer'];
			}
	}
?>