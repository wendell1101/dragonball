<?php
	include '../../include/function.php';
	include '../../include/sessionS.php';
	
	if(isset($_POST['classID'])){
		$monitoringID = $_SESSION['monitoring'];
		$classID = $_POST['classID'];		
			$a = mysqli_query($con,"SELECT * from class left join classmember on class.classID = classmember.classID inner join section on section.sectionID = class.section inner join faculty on class.faculty = faculty.facultyID where class.classID = '$classID' GROUP by class.classID");
				if(mysqli_num_rows($a) == 0){
					echo "<h3>Class Not Found</h3>";
				}else{
					while($row = mysqli_fetch_array($a)){
							
						echo "
							<table class='table'>
								<tr>
									<td>Department </td>
									<td><h4>".$row[10]."</h4></td>
								</tr>
								<tr>
									<td>Day/Time<br>SubjectCode </td>
									<td><h4>".$row[2]."</h4></td>
								</tr>
								<tr>
									<td>Faculty</td>
									<td><h4>".$row['Firstname']." ".$row['Lastname']."</h4></td>
								</tr>
								
								";
							 $aa = mysqli_query($con,"SELECT * from classmember where member = '$monitoringID' and classID = '$classID'");
								if(mysqli_num_rows($aa) == 0){
									$label ="<a href='ajaxProcess/joinClass.php?ci=".$classID."'<button class='btn btn-primary btn-sm'><i class='fa fa-eye'> </i> Join</button>";
								}else{
									while($row = mysqli_fetch_array($aa)){
										if($row['status'] == '0'){
											$label = 'Pending';
										}else if($row['status'] == '1'){
											$label = "<a href='?ci=".$row[0]."'><button class='btn btn-info btn-sm'><i class='fa fa-eye'> </i> View</button>";
										}
									}
								}
						echo "		
								<tr>
									<td></td>
									<td>$label</td>
								</tr>
							</table>
							
							
						";
					}
				}
	}
?>