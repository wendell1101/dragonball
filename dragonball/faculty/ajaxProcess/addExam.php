<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['examTitle'])){
		$examTitle = $_POST['examTitle'];
		$faculty = $_SESSION['faculty'];
		$minutes = $_POST['minutes'] * 60;
			$a = mysqli_query($con,"SELECT * from assessment where assessmentTitle = '$examTitle' and faculty = '$faculty '");
			if(mysqli_num_rows($a) == 0){
				mysqli_query($con,"INSERT into assessment (assessmentTitle,faculty,timer) VALUES ('$examTitle','$faculty','$minutes')");
				echo "Success";
			}else{
				echo "You Already Have this";
			}
	}
?>