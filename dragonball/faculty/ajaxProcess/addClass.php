<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['subject'])){
		$subject = $_POST['subject'];
		$section = $_POST['section'];
		$faculty = $_SESSION['faculty'];
		
			$a = mysqli_query($con,"SELECT * from class where subject = '$subject' and section = '$section' and faculty = '$faculty'");
			if(mysqli_num_rows($a) == 0){
				mysqli_query($con,"INSERT into class (subject,section,faculty) VALUES ('$subject','$section','$faculty')");
				
				$b = mysqli_query($con,"SELECT * from monitoring where section = '$section'");
					while($row = mysqli_fetch_array($b)){
						$classID = getLastClass($con);
						$monitoring = $row['monitoringID'];
						mysqli_query($con,"INSERT into classmember (classID,member,status,active) VALUES ('$classID','$monitoring','1','0')");
					}
				
				echo "Success";
			}else{
				echo "You Already Have this Class";
			}
	}
	function getLastClass($con){
		$a = mysqli_query($con,"SELECT classID from class order by classID desc LIMIT 0,1");
			while($row = mysqli_fetch_array($a)){
				return $row['classID'];
			}
	}
?>