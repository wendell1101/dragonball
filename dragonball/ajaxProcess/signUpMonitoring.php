<?php
	include '../include/function.php';
	
	if(isset($_POST['monitoringID'])){
		$monitoringID = $_POST['monitoringID'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$yearLevel = $_POST['yearLevel'];
		$section = $_POST['section'];
		$password = $_POST['password'];
		
		if($monitoringID == '' || $firstname == '' || $middlename == '' || $lastname == '' || $yearLevel == '' || $section == '' || $password == ''){
			echo "Please Fill Up all Fields";
		}else {
			$a = mysqli_query($con,"SELECT * from monitoring where monitoringID = '$monitoringID'");
				if(mysqli_num_rows($a) == 0){
					mysqli_query($con,"INSERT into monitoring
									(monitoringID,firstName,middleName,lastName,section,yearLevel,password)
									 VALUES
									('$monitoringID','$firstname','$middlename','$lastname','$section','$yearLevel','$password')
					");
					echo "Sign Up Success You May Login Now";
				}else{
					echo "Monitoring ID Already Registered";
				}
				
				
				
		}
		
	}
	
?>