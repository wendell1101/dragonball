<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	
							
				if(isset($_POST['UpdateProfile'])){
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					
					mysqli_query($con,"UPDATE faculty set Firstname = '$firstname' , Lastname = '$lastname' where facultyID = '".$_SESSION['faculty']."'");
					
				}

	header("location:../profile.php");
	
?>