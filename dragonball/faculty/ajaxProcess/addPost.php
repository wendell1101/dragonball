<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['postText'])){
		$postText = mysqli_real_escape_string($con,$_POST['postText']);
		$ci = $_POST['ci'];
		$faculty = $_SESSION['faculty'];
		
		
		$date = date("m/d/y");
		$time = date("g:i a");		
			mysqli_query($con,"INSERT into post (post,poster,date,time,class) VALUES ('$postText','$faculty','$date','$time','$ci')");
				$a = mysqli_query($con,"SELECT * from post order by postID desc LIMIT 0,1");
					while($row = mysqli_fetch_array($a)){
						$postID = $row['postID'];
						
							if($_POST['hiddenRoom'] != ''){
								$room = $_POST['hiddenRoom'];
								mysqli_query($con,"INSERT into postattachment (type,file,postID) VALUES ('room','$room','$postID')");
							}
							
							
								if(is_array($_FILES)){
									foreach($_FILES['image']['name'] as $name => $value){
										$file_name = explode(".", $_FILES['image']['name'][$name]);
										$imagex = array("jpg","png","jpeg","gif");
										$filex = array("docs","pdf","docx","odt","xls","xlsx","ppt","pptx","txt","ods");
											if(in_array($file_name[1],$imagex)){
												$new_name = md5(rand()).'.'.$file_name[1];
												$sourcePath = $_FILES['image']['tmp_name'][$name];
												$targetPath = "../../assets/img/upload/img/".$new_name;
													if(move_uploaded_file($sourcePath,$targetPath)){
														mysqli_query($con,"INSERT into postattachment (type,file,postID) VALUES ('Image','$new_name','$postID')");
													}
											}else if(in_array($file_name[1],$filex)){
												$new_name = md5(rand()).'.'.$file_name[1];
												$nn = $_FILES['image']['name'][$name];
												$bb = date("mdyi")."".$nn;
												$sourcePath = $_FILES['image']['tmp_name'][$name];
												$targetPath = "../../assets/img/upload/file/".$bb;
													if(move_uploaded_file($sourcePath,$targetPath)){
														mysqli_query($con,"INSERT into postattachment (type,file,postID,ext) VALUES ('File','$bb','$postID','$file_name[1]')");
													}
											}else{
												
											}
										
										
									}
								}
							else{

							}
					}	
				
		header("location:../index.php?ci=$ci");
			
	}
?>