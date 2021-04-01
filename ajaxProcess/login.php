<?php
	include '../include/function.php';
	
	if(isset($_POST['IDno'])){
		$IDno = $_POST['IDno'];
		$password = $_POST['password'];		
		$date = date("m/d/y");
		$time = date("g:i a");
		
		if($IDno == '' || $password == '' ){
			echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='../index.php'";
echo "</script>";

		}else {
			$a = mysqli_query($con,"SELECT * from monitoring where monitoringID = '$IDno'");
				if(mysqli_num_rows($a) == 0){
					
					$as = mysqli_query($con,"SELECT * from faculty where facultyID = '$IDno'");					
						if(mysqli_num_rows($as) == 0){
							echo "ID No. Does Not exist";
						}else{
							while ($row = mysqli_fetch_array($as)){
								if($row['password'] == $password){
									if($row['status'] == 0){
										echo "Account is Deactivated";
									}else{
										$_SESSION['faculty'] = $row['facultyID'];
										header("location:../index.php");
										mysqli_query($con,"INSERT into logs(activity,user,time,date,uType) VALUES ('login','$IDno','$time','$date','T')");
										echo "Welcomes";										
									}
										
								}else{
									echo "Incorrect Password";
								}
							}
						}
				}else{
					while($row = mysqli_fetch_array($a)){
						if($row['password'] == $password){	
							$_SESSION['monitoring'] = $row['monitoringID'];					
							echo "Welcome";	
							header("location:../index.php");
							mysqli_query($con,"INSERT into logs(activity,user,time,date,uType) VALUES ('login','$IDno','$time','$date','S')");
						}else{
							echo "Incorrect Password";
						}
					}
				}
				
				
				
		}
		
	}
	
?>