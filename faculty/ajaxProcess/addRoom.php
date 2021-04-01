<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['roomTitle'])){
		$roomTitle = $_POST['roomTitle'];
		$faculty = $_SESSION['faculty'];
		$minuts = $_POST['minutes'] * 60;
			$a = mysqli_query($con,"SELECT * from room where roomTitle = '$roomTitle' and faculty = '$faculty '");
			if(mysqli_num_rows($a) == 0){
				mysqli_query($con,"INSERT into room (roomTitle,faculty,timer) VALUES ('$roomTitle','$faculty','$minuts')");
				echo "Success";
			}else{
				echo "You Already Have this Room Title";
			}
	}
?>