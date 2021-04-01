<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	
							
				if(isset($_POST['UpdateProfile'])){
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$middlename = $_POST['middlename'];
					
					mysqli_query($con,"UPDATE monitoring set middleName = '$firstname' , lastName = '$lastname', middleName = '$middlename' where monitoringID = '".$_SESSION['monitoring']."'");
					
				}

	header("location:../profile.php");
	
?>