<?php 
	include 'db.php';

	function YearLevel($con,$yearLevel){
		$a = mysqli_query($con,"SELECT * from section where yearLevel = '$yearLevel'");
		while($row = mysqli_fetch_array($a)){
			echo "<option value='".$row['sectionID']."'>".$row['section']."</option>";
		}
	}
	
	function FacultyName($con,$facultyID){
		$a = mysqli_query($con,"SELECT * from faculty where facultyID = '$facultyID'");
		while($row = mysqli_fetch_array($a)){
			echo $row['Firstname']." ".$row['Lastname'];
		}
	}
	
	function MonitoringName($con,$monitoringID){
		$a = mysqli_query($con,"SELECT * from monitoring where monitoringID = '$monitoringID'");
		while($row = mysqli_fetch_array($a)){
			echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];
		}
	}
	
	function monitoringSection($con,$monitoringID){
		$a = mysqli_query($con,"SELECT * from monitoring where monitoringID = '$monitoringID'");
		while($row = mysqli_fetch_array($a)){
			return $row['section'];
		}
	}
	
	function subject($con){
		$a = mysqli_query($con,"SELECT * from subject");
		while($row = mysqli_fetch_array($a)){
			echo "<option value='".$row['subject']."'>".$row['subject']."</option>";
		}
	}
	
	function Section($con){
		$a = mysqli_query($con,"SELECT * from section");
		while($row = mysqli_fetch_array($a)){
			echo "<option value='".$row['sectionID']."'>".$row['section']."</option>";
		}
	}
	
	function classTable($con,$faculty){
		$a = mysqli_query($con,"SELECT *,section.section as TextSection from class inner join section on class.section = section.sectionID where faculty = '$faculty'");
		while($row = mysqli_fetch_array($a)){
			$confirm = 'Are You Sure ?';
			echo "
				<tr>
					<td>".$row['classID']."</td>
					<td><a href='?ci=".$row['classID']."'>".$row['TextSection']." ".$row['subject']."</td>
					<td>". countClassMember($con,$row['classID']) ."</td>
					<td>
						<div class='dropdown '>
						  <a class='btn btn-sm' href='' data-toggle='dropdown'>
							<i class='fa fa-cog'></i>
						  </a>

						  <div class='dropdown-menu' >
							
							<a class='dropdown-item' href='ajaxProcess/deleteClass.php?id=".$row['classID']."'><i class='fa fa-remove'></i>&nbsp; Delete</a>							
						  </div>
						</div>
					</td>
				</tr>
			";
		}
	}
	
	function roomTable($con,$faculty){
		$a = mysqli_query($con,"SELECT * from room where faculty = '$faculty'");
		while($row = mysqli_fetch_array($a)){
			$confirm = 'Are You Sure ?';
			echo "
				<tr>
					<td>".$row['roomID']."</td>
					<td><a href='?qi=".$row['roomID']."'>".$row['roomTitle']."</td>					
					<td>
						<div class='dropdown '>
						  <a class='btn btn-sm' href='' data-toggle='dropdown'>
							<i class='fa fa-cog'></i>
						  </a>

						  <div class='dropdown-menu' >
							
							<a class='dropdown-item' href='ajaxProcess/deleteRoom.php?id=".$row['roomID']."'><i class='fa fa-remove'></i>&nbsp; Delete</a>							
						  </div>
						</div>
					</td>
				</tr>
			";
		}
	}
	
	function examTable($con,$faculty){
		$a = mysqli_query($con,"SELECT * from assessment where faculty = '$faculty'");
		while($row = mysqli_fetch_array($a)){
			$confirm = 'Are You Sure ?';
			echo "
				<tr>
					<td>".$row['assessmentID']."</td>
					<td><a href='?ai=".$row['assessmentID']."'>".$row['assessmentTitle']."</td>					
					<td>
						<div class='dropdown '>
						  <a class='btn btn-sm' href='' data-toggle='dropdown'>
							<i class='fa fa-cog'></i>
						  </a>

						  <div class='dropdown-menu' >
							<a class='dropdown-item' href='javascript:;'><i class='fa fa-pencil'></i>&nbsp; Edit</a>
							<a class='dropdown-item' href='ajaxProcess/deleteExam.php?id=".$row['assessmentID']."'><i class='fa fa-remove'></i>&nbsp; Delete</a>							
						  </div>
						</div>
					</td>
				</tr>
			";
		}
	}
	
	function roomResultIndividual($con,$monitoring){
		$a = mysqli_query($con,"SELECT * from roomtake inner join class on roomtake.classID = class.classID inner join section on class.section = section.sectionID inner join room on roomtake.roomID = room.roomID inner join faculty on room.faculty = faculty.facultyID where monitoring = '$monitoring'");
		while($row = mysqli_fetch_array($a)){
			?>
		
				<tr>
					
					<td style='width:250px;'><a href='?qi=<?php echo $row['roomID']; ?>&qti=<?php echo $row['roomTakeID'];?>'><?php echo $row['roomTitle']; ?></a></td>	
					<td><?php echo $row['section']." ".$row['subject']; ?></td>
					<td><?php echo $row['Firstname']." ".$row['Lastname'];?></td>
				</tr>
			<?php
			
		}
	}
	
	function roomResultIndividualDetails($con,$monitoring,$roomID,$roomTakeID){
		$a = mysqli_query($con,"SELECT * from roomResult inner join roomattendance on roomResult.questionID = roomattendance.raID where roomResult.roomID = '$roomID' and roomTakeID = '$roomTakeID' and monitoring='$monitoring'");
		if(mysqli_num_rows($a)){
			echo "<br><h4 class='title'>ATTENDANCE VIEWED BY:</h4>";
		}else{
			while($row = mysqli_fetch_array($a)){
				
				
						if($row['answer'] == $row['correct']){
							if($row['answer'] == 'A'){$ac = 'background:#00631b;color:white;border-radius:10px;';}else{$ac='';}
							if($row['answer'] == 'B'){$b = 'background:#00631b;color:white;border-radius:10px;';}else{$b='';}
							if($row['answer'] == 'C'){$c = 'background:#00631b;color:white;border-radius:10px;';}else{$c='';}
							if($row['answer'] == 'D'){$d = 'background:#00631b;color:white;border-radius:10px;';}else{$d='';}
							$nac ='';
							$nb ='';
							$nc='';
							$nd='';
							
						}else{
							if($row['answer'] == 'A'){
								$ac ='background:#7d020f;color:white;border-radius:10px;';
									if($row['correct'] == 'A'){$nac = 'background:#010552;color:white;border-radius:10px;';}else{$nac='';}
									if($row['correct'] == 'B'){$nb = 'background:#010552;color:white;border-radius:10px;';}else{$nb='';}
									if($row['correct'] == 'C'){$nc = 'background:#010552;color:white;border-radius:10px;';}else{$nc='';}
									if($row['correct'] == 'D'){$nd = 'background:#010552;color:white;border-radius:10px;';}else{$nd='';}
							}else{$ac='';}
							if($row['answer'] == 'B'){
								$b = 'background:#7d020f;color:white;border-radius:10px;';
									if($row['correct'] == 'A'){$nac = 'background:#010552;color:white;border-radius:10px;';}else{$nac='';}
									if($row['correct'] == 'B'){$nb = 'background:#010552;color:white;border-radius:10px;';}else{$nb='';}
									if($row['correct'] == 'C'){$nc = 'background:#010552;color:white;border-radius:10px;';}else{$nc='';}
									if($row['correct'] == 'D'){$nd = 'background:#010552;color:white;border-radius:10px;';}else{$nd='';}
							}else{$b='';}
							if($row['answer'] == 'C'){
								$c = 'background:#7d020f;color:white;border-radius:10px;';
									if($row['correct'] == 'A'){$nac = 'background:#010552;color:white;border-radius:10px;';}else{$nac='';}
									if($row['correct'] == 'B'){$nb = 'background:#010552;color:white;border-radius:10px;';}else{$nb='';}
									if($row['correct'] == 'C'){$nc = 'background:#010552;color:white;border-radius:10px;';}else{$nc='';}
									if($row['correct'] == 'D'){$nd = 'background:#010552;color:white;border-radius:10px;';}else{$nd='';}
							}else{$c='';}
							if($row['answer'] == 'D'){
								$d = 'background:#7d020f;color:white;border-radius:10px;';
									if($row['correct'] == 'A'){$nac = 'background:#010552;color:white;border-radius:10px;';}else{$nac='';}
									if($row['correct'] == 'B'){$nb = 'background:#010552;color:white;border-radius:10px;';}else{$nb='';}
									if($row['correct'] == 'C'){$nc = 'background:#010552;color:white;border-radius:10px;';}else{$nc='';}
									if($row['correct'] == 'D'){$nd = 'background:#010552;color:white;border-radius:10px;';}else{$nd='';}
							}else{$d='';}
						}
						
				if($row['roomType'] == '1'){

						?>
							
							<div class='row' style='text-align:left;'>
								<div class='col-md-12'>
									<h4 class='title'><b></b><?php echo $row['question']; ?></h4>
								</div>
								<div class='col-md-6' style='<?php echo $ac." ".$nac; ?>'>			
									<h5><b>A.</b> <?php echo $row['choice1'];?></h5>
								</div>
								<div class='col-md-6' style='<?php echo $b." ".$nb; ?>'>			
									<h5><b>B.</b> <?php echo $row['choice2'];?></h5>				
								</div>
								<div class='col-md-6' style='<?php echo $c." ".$nc; ?>'>			
									<h5><b>C.</b> <?php echo $row['choice3'];?></h5>		
								</div>
								<div class='col-md-6' style='<?php echo $d." ".$nd; ?>'>			
									<h5><b>D.</b> <?php echo $row['choice4'];?></h5>	
								</div>			
								<div class='col-md-6'>
								
								</div>
								<div class='col-md-12'>
									<hr>
								</div>
							</div>			
						<?php
				}else if($row['roomType'] == '2'){
						?>
							<div class='row' style='text-align:left;'>
								<div class='col-md-12'>
									<h4 class='title'><b></b><?php echo $row['question']; ?></h4>
								</div>
								<div class='col-md-6' style='<?php echo $ac." ".$nac; ?>'>			
									<h5><b></b> <?php echo $row['choice1'];?></h5>
								</div>
								<div class='col-md-6' style='<?php echo $b." ".$nb; ?>'>			
									<h5><b></b> <?php echo $row['choice2'];?></h5>				
								</div>								
								<div class='col-md-6'>
								
								</div>
								<div class='col-md-12'>
									<hr>
								</div>
							</div>						
						<?php
				}
				else if($row['roomType'] == '3'){
					if($row['answer'] == $row['correct']){
						$tan = 'background:#00631b;color:white;border-radius:10px;';
						$corect = 'background:#00631b;color:white;border-radius:10px;';
					}else{
						$tan = 'background:#7d020f;color:white;border-radius:10px;';
						$corect = 'background:#010552;color:white;border-radius:10px;';
					}
						?>
							<div class='row' style='text-align:left;'>
								<div class='col-md-12'>
									<h4 class='title'><b></b><?php echo $row['question']; ?></h4>
								</div>
								<div class='col-md-6' style='<?php echo $tan; ?>'>			
									<h5><b></b> <?php echo $row['answer'];?></h5>
								</div>
								<div class='col-md-6' style='<?php echo $corect; ?>'>			
									<h5><b></b> <?php echo $row['correct'];?></h5>
								</div>								
								
								<div class='col-md-12'>
									<hr>
								</div>
							</div>						
						<?php
				}
			}
		}
	}
	
	if(isset($_GET['classTable'])){		
		classTable($con,$_SESSION['faculty']);
	}
	if(isset($_GET['roomTable'])){		
		roomTable($con,$_SESSION['faculty']);
	}
	if(isset($_GET['examTable'])){		
		examTable($con,$_SESSION['faculty']);
	}
	
	function forumChatBox($con,$classID,$user){
	
		$a = mysqli_query($con,"SELECT * from forum where classID = '$classID'");
			while($row = mysqli_fetch_array($a)){
				
				if($row['type'] == '2'){					
					if($row['sender'] == $user){
						
						?>
							<div class='row'>
								<div class='col-md-10' style='text-align:right;'>									
									<p style='border-radius:15px;padding:10px;' class='badge-primary' style='text-align:right;'><?php echo $row['message']; ?> <i class='fa fa-shield'></i> </p>
								</div>
								
								<div class='col-md-2'>
									<img  src='../assets/img/upload/img/<?php ProfilePicFaculty($con,$row['sender']); ?>' title='<?php FacultyName($con,$row['sender']); ?>' style='width:40px;height:40px;float:right;border-radius:50px;'>
								</div>
							</div>
						<?php
					}else if($row['sender'] != $user){
						
						
						?>
							<div class='row'>
								<div class='col-md-2'>	
									<img  src='../assets/img/upload/img/<?php ProfilePicFaculty($con,$row['sender']); ?>' title='<?php FacultyName($con,$row['sender']); ?>' style='width:40px;height:40px;float:left;border-radius:50px;'>									
								</div>
								<div class='col-md-10' >
									<p style='border-radius:15px;padding:10px;' class='badge-secondary'><i class='fa fa-shield'></i> <?php echo $row['message']; ?></p>
								</div>
							</div>
						<?php
					}
									
				}
				
				else if($row['type'] == '1'){				
					if($row['sender'] == $user){
						
						?>
							<div class='row'>
								<div class='col-md-10' style='text-align:right;'>									
									<p style='border-radius:15px;padding:10px;' class='badge-primary'><?php echo $row['message']; ?> </p>
								</div>
								<div class='col-md-2'>
									<img  src='../assets/img/upload/img/<?php ProfilePicMonitoring($con,$row['sender']); ?>' title='<?php MonitoringName($con,$row['sender']); ?>' style='width:40px;height:40px;float:right;border-radius:50px;'>
								</div>
							</div>
						<?php
					}else{
						?>
							<div class='row'>
								<div class='col-md-2'>	
									<img src='../assets/img/upload/img/<?php ProfilePicMonitoring($con,$row['sender']); ?>' title='<?php MonitoringName($con,$row['sender']); ?>' style='width:40px;height:40px;float:left;border-radius:50px;'>									
								</div>
								<div class='col-md-10'>
									<p style='border-radius:15px;padding:10px;' class='badge-secondary'><?php echo $row['message']; ?></p>
								</div>
							</div>
						<?php
					}
				
				}
			}
		
	}
	
	function ProfilePicMonitoring($con,$id){
		$a = mysqli_query($con,"SELECT * from monitoring where monitoringID = '$id'");
			while($row = mysqli_fetch_array($a)){
				echo $row['img'];
			}
	}
	
	function ProfilePicFaculty($con,$id){
		$a = mysqli_query($con,"SELECT * from faculty where facultyID = '$id'");
			while($row = mysqli_fetch_array($a)){
				echo $row['img'];
			}
	}
	
	if(isset($_GET['forumChatBox'])){
		$classID = $_GET['ci'];
		$user = $_GET['user'];
		forumChatBox($con,$classID,$user);
	}
	function getSELECTedClassName($con,$ci){
		$a = mysqli_query($con,"SELECT *,section.section as TextSection from class inner join section on class.section = section.sectionID where classID = '$ci'");
			while($row = mysqli_fetch_array($a)){
				echo $row['TextSection']." ".$row['subject']; 
			}
	}
	
	function getSELECTedRoomName($con,$qi){
		$a = mysqli_query($con,"SELECT * from room where roomID = '$qi'");
			while($row = mysqli_fetch_array($a)){
				echo $row['roomTitle']; 
			}
	}
	
	function getSELECTedExamName($con,$ai){
		$a = mysqli_query($con,"SELECT * from assessment where assessmentID = '$ai'");
			while($row = mysqli_fetch_array($a)){
				echo $row['assessmentTitle']; 
			}
	}
	
	function tablePendingClassMember($con,$classID){
		$a = mysqli_query($con,"SELECT * from classmember inner join monitoring on monitoring.monitoringID = classmember.member where classID = '$classID' and status = '0'");
		while($row = mysqli_fetch_array($a)){
			echo "
				<tr>	
					
					<td style='width:150px;'>".$row['firstName']." ".$row['lastName']."</td>		
					<td style='width:10px;'>".$row['monitoringID']."</td>		
					<td style='width:1vh;'>
						
						<input class='form-check-input' name='pending[]' type='checkbox' value='".$row['cmID']."'>
					</td>
					
				</tr>
			";
		}
	}
	function countPendingClassMember($con,$classID){
		$a = mysqli_query($con,"SELECT * from classmember where classID = '$classID' and status = '0'");
		echo mysqli_num_rows($a);
	}
	
	function tableClassMember($con,$classID){
		$a = mysqli_query($con,"SELECT * from classmember inner join monitoring on monitoring.monitoringID = classmember.member where classID = '$classID' and status = '1'");
		while($row = mysqli_fetch_array($a)){
			echo "
					<tr>
						<td style='width:5px;'><i class='fa fa-circle' style='color:green;'></i></td>
						<td>". $row['monitoringID']."</td>
						<td>". $row['firstName']." ".$row['lastName']."</td>
						<td>
							<div class='dropdown '>
							 
								<i class='fa fa-cog' data-toggle='dropdown'></i>
							  

							  <div class='dropdown-menu' >								
								<a class='dropdown-item' href='ajaxProcess/kickClass.php?id=".$row['cmID']."&ci=".$_GET['ci']."'><i class='fa fa-remove'></i>&nbsp; Kick</a>							
							  </div>
							</div>
						</td>		
					</tr>
			";
		}
	}
	
	function tableMyMonitoring($con,$faculty){
		$a = mysqli_query($con,"SELECT * from classmember inner join monitoring on monitoring.monitoringID = classmember.member inner join class on class.classID = classmember.classID where status = '1' and faculty = '$faculty' group by monitoringID");
		while($row = mysqli_fetch_array($a)){
			echo "
					<tr>
						
						<td>". $row['monitoringID']."</td>
						<td><a href='?si=".$row['monitoringID']."'>". $row['firstName']." ".$row['lastName']."</a></td>
						
					</tr>
			";
		}
	}
	
	function tableClassMemberSV($con,$classID){
		$a = mysqli_query($con,"SELECT * from classmember inner join monitoring on monitoring.monitoringID = classmember.member where classID = '$classID' and status = '1'");
		while($row = mysqli_fetch_array($a)){
			echo "
					<tr>
						<td style='width:5px;'><i class='fa fa-circle' style='color:green;'></i></td>
						<td>". $row['monitoringID']."</td>
						<td>". $row['firstName']." ".$row['lastName']."</td>						
					</tr>
			";
		}
	}
	
	function countClassMember($con,$classID){
		$a = mysqli_query($con,"SELECT * from classmember where classID = '$classID' and status = '1'");
		return mysqli_num_rows($a);
	}
	
	
	function classTableMonitoringView($con,$monitoringID){
		$aa = mysqli_query($con,"SELECT *,section.section as TextSection from classmember inner join class on class.section = class.classID inner join section on section.sectionID = class.section inner join faculty on faculty.facultyID = class.faculty where classmember.member = '$monitoringID'");		
		

			while ($row = mysqli_fetch_array($aa)){
					
						if($row[3] == '0'){
							$label = "pending";
						}else{
							$label = "<a href='?ci=".$row[1]."'><button class='btn btn-info btn-sm'><i class='fa fa-eye'> </i> View</button></a>";
						}						
						echo "						
							<tr>
								<td>".$row[1]."</td>
								<td>" .$row[10]." ".$row[7]."</td>
								<td>" .$row['Firstname']." ".$row['Lastname']."</td>
								<td>". countClassMember($con,$row[1]) ."</td>
								<td>$label</td>
							</tr>
						";	
					
			}
		
	}
	
	function getFacultyInClass($con,$classID){
		$a = mysqli_query($con,"SELECT * from class inner join faculty on class.faculty = faculty.facultyID where classID = '$classID'");
			while($row = mysqli_fetch_array($a)){
				echo $row['Firstname']." ".$row['Lastname'];
			}
	}
	
	function postWall($con,$classID){
		$a = mysqli_query($con,"SELECT * from post inner join faculty on post.poster = faculty.facultyID where class = '$classID' order by postID desc");
		while($row = mysqli_fetch_array($a)){
			$postID = $row['postID'];
			echo"
				<div class='tim-typo' >
					<span class='tim-note' style='width:22%;height:100%'>
						<img style='width:50px;height:50px;float:center;' src='../assets/img/upload/img/".$row['img']."' alt='Circle Image' class='rounded-circle img-fluid'>
							<p class='title' style='position:relative;top:-55px;'>".$row['Firstname']." ".$row['Lastname']."
								<small><br>11:42am 03/28/2021</small>
							</p>
					</span>
								  
					<div class='blockquote undefined'>
						<p>
							".$row['post']."
						</p>
						<p style='float:right;'>";
						
						?>
						
							<a href='ajaxProcess/deletePost.php?id=<?php echo $row['postID']; ?>&ci=<?php echo $_GET['ci']; ?>' title='Delete Post' onclick='return confirm("Are Your Sure?");'>
								<button class='btn badge badge-pill badge-danger'> <i class='fa fa-remove'></i></button>
							</a>
						</p>
						<div id='attachment'>
							<div class='row'>
						<?php	
							
							$aa = mysqli_query($con,"SELECT * from postattachment where postID = '$postID' order by type");
								while($row = mysqli_fetch_array($aa)){
										if($row['type'] == 'Image'){
											?>
												<div class='col-md-6'>
													<img style='float:center;' src='../assets/img/upload/img/<?php echo $row['file']; ?>' class='rounded img-fluid'>
												</div>
											<?php
										}else if($row['type'] == 'File'){
											?>
												<div class='col-md-12'>
													<a style='color:black;text-decoration:underlined' href='../assets/img/upload/file/<?php echo $row['file']; ?>' download>
														<i class='fa fa-file-word-o'> </i> &nbsp; <?php echo $row['file']; ?>
													</a>
													<hr>
												</div>
											<?php
										}else if($row['type'] == 'room'){
											
											
												 ?>
													<div class='col-md-12'>
														<h4 class='title'><i class='fa fa-edit'></i> <?php getRoomName($con,$row['file']); ?></h4>
															<a href='?ci=<?php echo $classID;?>&qi=<?php echo $row['file']; ?>&pi=<?php echo $postID;?>'>	
																<button class="btn btn-block btn-info">
																	CHECK MONITORING RESULT
																</button>
															</a>
															
															<a href='ajaxProcess/disableRoom.php?id=<?php echo $row['postAttachementID']; ?>&ci=<?php echo $classID; ?>&stat=<?php echo $row['title']; ?>'>
																
																	<?php 
																		if($row['title'] == '1'){
																			echo "<button class='btn btn-danger btn-sm'>DISCARD ATTENDANCE</button>";
																		}else{
																			echo "<button class='btn btn-success btn-sm'>SAVE ATTENDANCE</button>";
																		}
																	?>
																</button>
															</a>
													</div>
												 <?php
											
											
											?>
													
											
											<?php
										}
									
								}
							
			echo"			</div>
						</div>
					</div>
				</div>
			<hr>
			";
		}
	
	}
	
	function postWallMonitoring($con,$classID){
		$a = mysqli_query($con,"SELECT * from post inner join faculty on post.poster = faculty.facultyID where class = '$classID' order by postID desc");
		while($row = mysqli_fetch_array($a)){
			$postID = $row['postID'];
			echo"
				<div class='tim-typo' >
					<span class='tim-note' style='width:22%;height:100%'>
						<img style='width:50px;height:50px;float:center;' src='../assets/img/upload/img/".$row['img']."' alt='Circle Image' class='rounded-circle img-fluid'>
							<p class='title' style='position:relative;top:-55px;'>".$row['Firstname']." ".$row['Lastname']."
								<small><br>6:42pm 09/11/2019</small>
							</p>
					</span>
								  
					<div class='blockquote undefined'>
						<p>
							".$row['post']."
						</p>
						<div id='attachment'>
							<div class='row'>
							";
							$aa = mysqli_query($con,"SELECT * from postattachment where postID = '$postID'");
								while($row = mysqli_fetch_array($aa)){
										if($row['type'] == 'Image'){
											?>
												<div class='col-md-6'>
													<img style='float:center;' src='../assets/img/upload/img/<?php echo $row['file']; ?>' class='rounded img-fluid'>
												</div>
											<?php
										}else if($row['type'] == 'File'){
											?>
												<div class='col-md-12'>
													<a style='color:black;text-decoration:underlined' href='../assets/img/upload/file/<?php echo $row['file']; ?>' download>
														<i class='fa fa-file-word-o'> </i> &nbsp; <?php echo $row['file']; ?>
													</a>
													<hr>
												</div>
											<?php
										}else if($row['type'] == 'room'){
											
											 $aaa = mysqli_query($con,"SELECT * from roomtake where roomID = '".$row['file']."' and postID = '$postID' and monitoring='".$_SESSION['monitoring']."'");
											 if(mysqli_num_rows($aaa) == 0){
												if($row['title'] == '2'){
													$disabled = 'disabled';
													$text = 'Room Disabled';
												}else{
													$disabled = '';
													$text = 'Check Attendance';
												}
												 ?>
													<div class='col-md-12'>
													
														<h4 class='title'><i class='fa fa-edit'></i> <?php getRoomName($con,$row['file']); ?></h4>
														<a href='ajaxProcess/startRoom.php?qi=<?php echo $row['file'];?>&postID=<?php echo $postID;?>&ci=<?php echo $_GET['ci'];?>'>
															<button class='btn btn-info' <?php echo $disabled; ?>><?php echo $text; ?></button>
														</a>
													</div>							
												 <?php
											 }else{
												 while($row = mysqli_fetch_array($aaa)){
													 $roomID = $row['roomID'];
													 if($row['status'] == '1'){
														 echo "<div class='col-md-12'>";
															echo "<div class='row'>";
																getRoomName($con,$roomID);
																question_form($con,$roomID,$row['roomTakeID']);
															echo "</div>";
														echo "</div>";
													 }else{
														 ?>
															<div class='col-md-12'>
																<i class='fa fa-edit'></i> <?php getRoomName($con,$roomID); ?>
																<h4 class='title alert-success'><i class='fa fa-edit'></i> ATTENDANCE SUBMITTED</h4>
															</div>
														 <?php
													 }
												 }
											 }
											
											
										}
									
								}
							
			echo"				
							</div>
						</div>
					</div>
				</div>
			<hr>
			";
		}
	
	}
	
	function roomTableUpload($con,$facultyID){
		$a = mysqli_query($con,"SELECT * from room where faculty = '$facultyID'");
			while($row = mysqli_fetch_array($a)){
				?>
					<tr>
						<td><?php echo $row['roomTitle']; ?></td>
						<td><button class='btn btn-primary btn-sm uploadRoom' axis='<?php echo $row['roomTitle']; ?>' id='upload<?php echo $row['room']; ?>' rel='<?php echo $row['roomID']; ?>'><i class='fa fa-plus'></i></button></td>
					</tr>
				<?php
			}
	}
	
	
	
	function getRoomName($con,$roomID){
		$a = mysqli_query($con,"SELECT * from room where roomID = '$roomID'");
			while($row = mysqli_fetch_array($a)){
				echo $row['roomTitle'];
			}
	}
	
	function roomResult($con,$roomID,$postID,$classID){
		$a = mysqli_query($con,"SELECT * from roomtake left join monitoring on monitoring.monitoringID = roomtake.monitoring where postID = '$postID' and roomID ='$roomID' and classID = '$classID'");
			echo "<table class='table table-striped'>";
			while($row = mysqli_fetch_array($a)){
				$roomTakeID = $row['roomTakeID'];
				
				$aa = mysqli_query($con,"SELECT * from roomresult where roomTakeID = '$roomTakeID'");
					$score = 0;
					while($rows = mysqli_fetch_array($aa)){
						if($rows['answer'] == $rows['correct']){
							$score++;
						}else{
							
						}
					}
					
				?>
					<tr>
						<td><?php echo $row['monitoringID']; ?></td>
						<td><?php echo $row['firstName']." ".$row['lastName']; ?></td>
						<td><?php echo $score."/".$aa = mysqli_num_rows($aa);?></td>
					</tr>
				<?php				
			}
			echo "</table>";
	}
	
	function roomResultRecords($con,$monitoringID,$faculty){
		$a = mysqli_query($con,"SELECT * from roomtake inner join monitoring on monitoring.monitoringID = roomtake.monitoring left join post on post.postID = roomtake.postID inner join room on room.roomID = roomtake.roomID inner join class on class.classID = roomtake.classID inner join section on section.sectionID = class.section where status = '2' and monitoring = '$monitoringID' and poster = '$faculty'");
			
			
			while($row = mysqli_fetch_array($a)){
				$roomTakeID = $row['roomTakeID'];				
				$aa = mysqli_query($con,"SELECT * from roomresult where roomTakeID = '$roomTakeID'");
					$score = 0;
					while($rows = mysqli_fetch_array($aa)){
						if($rows['answer'] == $rows['correct']){
							$score++;
						}else{
							
						}
					}
					
				?>
					<tr>
						<td><?php echo $row['roomTitle']; ?></td>
						<td><?php echo $row['section']." ".$row['subject']; ?></td>
						<td><?php echo $score."/".$aa = mysqli_num_rows($aa);?></td>
					</tr>
				<?php				
			}
		
	}
	
	function postWallAdminView($con,$classID){
		$a = mysqli_query($con,"SELECT * from post inner join faculty on post.poster = faculty.facultyID where class = '$classID' order by postID desc");
		while($row = mysqli_fetch_array($a)){
			$postID = $row['postID'];
			echo"
				<div class='tim-typo' >
					<span class='tim-note' style='width:22%;height:100%'>
						<img style='width:50px;height:50px;' src='../assets/img/tcu_logo.png' alt='Circle Image' class='rounded-circle img-fluid'>
							<h6 class='title' style='position:relative;'>".$row['Firstname']." ".$row['Lastname']."
								<small><br>6:42pm 09/11/2019</small>
							</h6>
					</span>
								  
					<div class='blockquote undefined'>
						<p>
							".$row['post']."
						</p>
						<div class='row' id='attachment'>
							
							";
							$aa = mysqli_query($con,"SELECT * from postattachment where postID = '$postID'");
								while($row = mysqli_fetch_array($aa)){
									echo "
										<div class='col-md-6'>
											<img src='../assets/img/upload/ibon.jpg' class='rounded img-fluid cusImage'>
										</div>
									";
								}
							
			echo"				
						</div>
					</div>
				</div>
			<hr>
			";
		}
	}
	
	if(isset($_GET['postWall'])){
		$ci = $_GET['ci'];
		postWall($con,$ci);
	}
	
	function checkMember($con,$monitoringID,$classID){
		$a = mysqli_query($con,"SELECT * from classmember where classID = '$classID' and member = '$monitoringID'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{
			while($row = mysqli_fetch_array($a)){
				if($row['status'] == 0){
					return 0;
				}else{
					return 1;
				}
			}
		}		
	}
	
	function checkClassFaculty($con,$facultyID,$classID){
		$a = mysqli_query($con,"SELECT * from class where faculty = '$facultyID' and classID = '$classID'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{
			return 1;
		}		
	}
	
	function checkRoomFaculty($con,$facultyID,$roomID){
		$a = mysqli_query($con,"SELECT * from room where faculty = '$facultyID' and roomID = '$roomID'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{
			return 1;
		}		
	}
	
	function checkExamFaculty($con,$facultyID,$ai){
		$a = mysqli_query($con,"SELECT * from assessment where faculty = '$facultyID' and assessmentID = '$ai'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{
			return 1;
		}		
	}
	
	function checkGroup($con,$classID){
		$a = mysqli_query($con,"SELECT * from class where classID = '$classID'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{			
			return 1;			
			
		}		
	}
	
	function checkRoom($con,$roomID){
		$a = mysqli_query($con,"SELECT * from room where roomID = '$roomID'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{			
			return 1;			
			
		}		
	}
	
	function checkExam($con,$ai){
		$a = mysqli_query($con,"SELECT * from assessment where assessmentID = '$ai'");
		if(mysqli_num_rows($a) == 0){
			return 0;
		}else{			
			return 1;			
			
		}		
	}
	
	function logInAdmin($con,$username,$password){
		$a = mysqli_query($con,"SELECT * from admin where username = '$username'");
			if(mysqli_num_rows($a) == 0){
				$msg = 'Incorrect Login';
			}else{
				while($row = mysqli_fetch_array($a)){
					if($row['password'] == $password){
						$_SESSION['admin'] = $row['adminID'];
						header('location:home.php');
					}else{
						$msg ='Incorrect Login';
					}
				}
			}
	}
	
	function SELECTRoomType($con){
		$a = mysqli_query($con,"SELECT * from roomtype");
			while($row = mysqli_fetch_array($a)){
				?>
					<option value='<?php echo $row['qtID']; ?>' ><?php echo $row['roomType']; ?></option>
				<?php
			}
	}
	
	function adminName($con,$adminID){
		$a = mysqli_query($con,"SELECT * from admin where adminID = '$adminID'");
			while($row = mysqli_fetch_array($a)){
				echo $row['name'];
			}
	}
	
	function dataCount($con,$table){
		$a = mysqli_query($con,"SELECT * from $table");
		echo mysqli_num_rows($a);
	}	
	function facultyTable($con){
		$a = mysqli_query($con,"SELECT * from faculty");			
			while($row = mysqli_fetch_array($a)){
				if($row['status'] == 0){
					$label = 'Activate';
					$status ='<i class="fa fa-circle" style="color:red;"></i> Deactivated';
				}else{
					$label = 'Deactivate';
					$status ='<i class="fa fa-circle" style="color:green"></i> Activated';
				}
				echo "
					<tr>
						<td>".$row['facultyID']."</td>
						<td>".$row['Firstname']." ".$row['Lastname']."</td>
						<td>".$status."</td>
						<td>";
							?>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  <i class="fas fa-chevron-circle-down fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
									   <div class="dropdown-header">Settings:</div>
									  <a class="dropdown-item" href="process/activate.php?id=<?php echo $row['facultyID']?>&ac=<?php echo $row['status']; ?>"><i class='fas fa-sync-alt'></i><?php echo $label; ?></a>
									  <a class="dropdown-item" href="#"><i class='fas fa-edit'></i> Edit</a>									 
									  <a class="dropdown-item" href="#"><i class='fas fa-eye'></i> View</a>									
								  </div>
							<?php
				echo	"</td>
					</tr>
				";
			}
	}
	
	function classTableAdminView($con){
		$aa = mysqli_query($con,"SELECT * from class inner join section on class.section = section.sectionID inner join faculty on class.faculty = faculty.facultyID");		
		
			while ($row = mysqli_fetch_array($aa)){
					
											
						echo "						
							<tr>
								<td>".$row['classID']."</td>
								<td>" .$row[5]." ".$row[2]."</td>
								<td>" .$row['Firstname']." ".$row['Lastname']."</td>
								<td>". countClassMember($con,$row['classID']) ."</td>
								<td>";
									?>
										<div class="dropdown no-arrow">
											<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  <i class="fas fa-chevron-circle-down fa-sm fa-fw text-gray-400"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
											   <div class="dropdown-header">Settings:</div>
											  <a onclick='return confirm("Are You Sure?");' class="dropdown-item" href="process/removeClass.php?id=<?php echo $row['classID']?> "> <i class='fas fa-trash'></i> Remove</a>
											  <a class="dropdown-item" href="#"><i class='fas fa-edit'></i> Edit</a>									 
											  <a class="dropdown-item" href="?ci=<?php echo $row['classID']; ?>"><i class='fas fa-eye'></i> View</a>									
										  </div>
									<?php
									
						echo"	</td>
							</tr>
						";	
					
			}
		
	}
	
	function monitoringTable($con){
		$a = mysqli_query($con,"SELECT * from monitoring inner join section on monitoring.section = section.sectionID");			
			while($row = mysqli_fetch_array($a)){				
				echo "
					<tr>
						<td>".$row['monitoringID']."</td>
						<td>".$row['firstName']." ".$row['middleName']." ".$row['lastName']."</td>
						<td>".$row['section']."</td>
						<td>";
							?>
								<div class="dropdown no-arrow">
									<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  <i class="fas fa-chevron-circle-down fa-sm fa-fw text-gray-400"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
									   <div class="dropdown-header">Settings:</div>
									   <a onclick='return confirm("Are You Sure?");' class="dropdown-item" href="process/removeMonitoring.php?id=<?php echo $row['monitoringID']?> "> <i class='fas fa-trash'></i> Delete</a>
									  <a class="dropdown-item" href="#"><i class='fas fa-edit'></i> Edit</a>									 
									  <a class="dropdown-item" href="#"><i class='fas fa-eye'></i> View</a>									
								  </div>
							<?php
				echo	"</td>
					</tr>
				";
			}
	}
	
	function roomWall($con,$roomID){
		$a = mysqli_query($con,"SELECT * from roomattendance where roomID = '$roomID'");
		$item = 0;
		while($row = mysqli_fetch_array($a)){
			
			
			$item++;
			if($row['roomType'] == '1'){
				if($row['correct'] == 'A'){$ac = 'background:#00631b;color:white;border-radius:10px;';}else{$ac='';}
				if($row['correct'] == 'B'){$b = 'background:#00631b;color:white;border-radius:10px;';}else{$b='';}
				if($row['correct'] == 'C'){$c = 'background:#00631b;color:white;border-radius:10px;';}else{$c='';}
				if($row['correct'] == 'D'){$d = 'background:#00631b;color:white;border-radius:10px;';}else{$d='';}
				

				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b>A.</b> <?php echo $row['choice1'];?></h5>
					</div>
					<div class='col-md-6' style='<?php echo $b; ?>'>			
						<h5><b>B.</b> <?php echo $row['choice2'];?></h5>				
					</div>
					<div class='col-md-6' style='<?php echo $c; ?>'>			
						<h5><b>C.</b> <?php echo $row['choice3'];?></h5>		
					</div>
					<div class='col-md-6' style='<?php echo $d; ?>'>			
						<h5><b>D.</b> <?php echo $row['choice4'];?></h5>	
					</div>			
					<div class='col-md-6'>
					
					</div>
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
			<?php
			}else if($row['roomType'] == '2'){
				if($row['correct'] == 'A'){$ac = 'background:#00631b;color:white;border-radius:10px;';}else{$ac='';}
				if($row['correct'] == 'B'){$b = 'background:#00631b;color:white;border-radius:10px;';}else{$b='';}				
				

				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b></b> <?php echo $row['choice1'];?></h5>
					</div>
					<div class='col-md-6' style='<?php echo $b; ?>'>			
						<h5><b></b> <?php echo $row['choice2'];?></h5>				
					</div>
					
					<div class='col-md-6'>
					
					</div>
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
				<?php
				
			}else if($row['roomType'] == '3'){
				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b></b> <?php echo $row['correct'];?></h5>
					</div>	
					
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
				<?php
			}
		}
	}
	
	
	function examWall($con,$ai){
		$a = mysqli_query($con,"SELECT * from assessmentForm where assessmentID = '$ai'");
		$item = 0;
		while($row = mysqli_fetch_array($a)){
			
			
			$item++;
			if($row['roomType'] == '1'){
				if($row['correct'] == 'A'){$ac = 'background:#00631b;color:white;border-radius:10px;';}else{$ac='';}
				if($row['correct'] == 'B'){$b = 'background:#00631b;color:white;border-radius:10px;';}else{$b='';}
				if($row['correct'] == 'C'){$c = 'background:#00631b;color:white;border-radius:10px;';}else{$c='';}
				if($row['correct'] == 'D'){$d = 'background:#00631b;color:white;border-radius:10px;';}else{$d='';}
				

				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b>A.</b> <?php echo $row['choice1'];?></h5>
					</div>
					<div class='col-md-6' style='<?php echo $b; ?>'>			
						<h5><b>B.</b> <?php echo $row['choice2'];?></h5>				
					</div>
					<div class='col-md-6' style='<?php echo $c; ?>'>			
						<h5><b>C.</b> <?php echo $row['choice3'];?></h5>		
					</div>
					<div class='col-md-6' style='<?php echo $d; ?>'>			
						<h5><b>D.</b> <?php echo $row['choice4'];?></h5>	
					</div>			
					<div class='col-md-6'>
					
					</div>
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
			<?php
			}else if($row['roomType'] == '2'){
				if($row['correct'] == 'A'){$ac = 'background:#00631b;color:white;border-radius:10px;';}else{$ac='';}
				if($row['correct'] == 'B'){$b = 'background:#00631b;color:white;border-radius:10px;';}else{$b='';}				
				

				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b></b> <?php echo $row['choice1'];?></h5>
					</div>
					<div class='col-md-6' style='<?php echo $b; ?>'>			
						<h5><b></b> <?php echo $row['choice2'];?></h5>				
					</div>
					
					<div class='col-md-6'>
					
					</div>
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
				<?php
				
			}else if($row['roomType'] == '3'){
				?>
				<div class='row' style='text-align:left;'>
					<div class='col-md-12'>
						<h4 class='title'><b><?php echo $item; ?>. </b><?php echo $row['question']; ?></h4>
					</div>
					<div class='col-md-6' style='<?php echo $ac; ?>'>			
						<h5><b></b> <?php echo $row['correct'];?></h5>
					</div>	
					
					<div class='col-md-12'>
						<hr>
					</div>
				</div>
				<?php
			}
		}
	}
	
	if(isset($_GET['roomWall'])){
		roomWall($con,$_GET['qi']);		
	}
	
	if(isset($_GET['examWall'])){
		examWall($con,$_GET['ai']);		
	}
	
	function getItems($con,$roomID){
		$a = mysqli_query($con,"SELECT * from roomattendance where roomID = '$roomID'"); 
		return mysqli_num_rows($a);
		
	}
	
	function roomTakeTimer($con,$roomTakeID){
		$a = mysqli_query($con,"SELECT * from roomtake where roomTakeID = '$roomTakeID'");
			while($row = mysqli_fetch_array($a)){
				return $row['time'];
			}
	}
	
	
	function question_form($con,$roomID,$roomTakeID){					
				 ?>
				
				<form method='POST' action='ajaxProcess/submitRoom.php?ci=<?php echo $_GET['ci'];?>' style='font-size:20px;'>
					<h3 class='title'>Timer : 
						<span rel='<?php echo roomTakeTimer($con,$roomTakeID); ?>' id='timer<?php echo $roomTakeID; ?>' class='timer'>
							<?php echo roomTakeTimer($con,$roomTakeID); ?>
						</span>
					</h3>
					<input type='hidden' name='roomID' value='<?php echo $roomID; ?>'>
					<input type='hidden' id='roomTake' value='<?php echo $roomTakeID; ?>'>
					<?php $a = mysqli_query($con,"SELECT * from roomattendance where roomID = '$roomID'"); 
					$item = 0;
					while($row = mysqli_fetch_array($a)){
						$item++;
						$radName = 'answer'.$item;
						$text = 'text'.$item;
					 ?>
					
						
						<hr>
					<?php
						
						echo "<h5>$item. ".$row['question']."</h5>"; 
						if($row['roomType'] == '1'){
							?>
							<input type='hidden' name='questionID' value='<?php echo $row['raID']; ?>'>
								<input type='hidden' name='roomTakeID' value='<?php echo $roomTakeID; ?>'>
								<div class='row' style='text-align:left;'>
									<div class='col-md-6'>								
										<input class="radiohit" id='A<?php echo $radName; ?>' type='radio' value='A' name='<?php echo $radName; ?>' required><label  for='A<?php echo $radName; ?>'><b>A. </b> <?php echo $row['choice1']; ?></label>
									</div>
									<div class='col-md-6'>
										<input class="radiohit" id='B<?php echo $radName; ?>' type='radio' value='B' name='<?php echo $radName; ?>' required><label  for='B<?php echo $radName; ?>'><b>B. </b> <?php echo $row['choice2']; ?></label>
									</div>
									<div class='col-md-6'>
										<input class="radiohit" id='C<?php echo $radName; ?>' type='radio' value='C' name='<?php echo $radName; ?>' required><label  for='C<?php echo $radName; ?>'><b>C. </b> <?php echo $row['choice3']; ?></label>
									</div>
									<div class='col-md-6'>
										<input class="radiohit" id='D<?php echo $radName; ?>' type='radio' value='D' name='<?php echo $radName; ?>' required><label  for='D<?php echo $radName; ?>'><b>D. </b> <?php echo $row['choice4']; ?></label>
									</div>
								</div>
					
							
							<?php
						}else if($row['roomType'] == '2'){
							?>
								<input type='hidden' name='questionID' value='<?php echo $row['raID']; ?>'>
									<input type='hidden' name='roomTakeID' value='<?php echo $roomTakeID; ?>'>
									<div class='row' style='text-align:left;'>
										<div class='col-md-6'>								
											<input class="radiohit" id='A<?php echo $radName; ?>' type='radio' value='A' name='<?php echo $radName; ?>' required><label  for='A<?php echo $radName; ?>'><b></b> <?php echo $row['choice1']; ?></label>
										</div>
										<div class='col-md-6'>
											<input class="radiohit" id='B<?php echo $radName; ?>' type='radio' value='B' name='<?php echo $radName; ?>' required><label  for='B<?php echo $radName; ?>'><b></b> <?php echo $row['choice2']; ?></label>
										</div>										
									</div>							
							<?php
						}else if($row['roomType'] == '3'){
							?>
								<input type='hidden' name='questionID' value='<?php echo $row['raID']; ?>'>
									<input type='hidden' name='roomTakeID' value='<?php echo $roomTakeID; ?>'>
									<div class='row' style='text-align:left;'>
										<div class='col-md-12'>								
											<input class="" style='width:100%;' placeholder='Answer Here'  id='<?php echo $radName; ?>' type='text' name='<?php echo $radName; ?>' required>										
											
										</div>																				
									</div>							
							<?php
						}
						?>
						
					
					
					<?php } ?>
					<hr>
					<button class='btn btn-success' name='submitRoom'>Submit</button>
				</form>
				</br>
				
				<form action="https://meet.google.com/aqr-ayet-vyu">


    <input type="submit"  class='btn btn-danger' value="VIEW GOOGLE MEET" />
</form>

			
			
<?php } 




?>

