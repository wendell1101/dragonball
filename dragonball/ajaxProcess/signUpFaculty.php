<?php
	include '../include/function.php';
	
	if(isset($_POST['facultyID'])){
		$facultyID = $_POST['facultyID'];
		$firstname = $_POST['firstname'];		
		$lastname = $_POST['lastname'];	
		$password = $_POST['password'];
		
		if($facultyID == '' || $firstname == '' || $lastname == '' || $password == ''){
			echo "Please Fill Up all Fields";
		}else {
			$a = mysqli_query($con,"SELECT * from faculty where facultyID = '$facultyID'");
				if(mysqli_num_rows($a) == 0){
					mysqli_query($con,"INSERT into faculty 
									(facultyID,firstName,lastName,password)
									 VALUES
									('$facultyID','$firstname','$lastname','$password')
					");
					echo "Sign Up Success You May Login Now";
				}else{
					echo "Faculty ID Already Registered";
				}
				
				
				
		}
		
	}
	
?>