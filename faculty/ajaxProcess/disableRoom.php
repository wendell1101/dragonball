<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	
							
				if(isset($_GET['id'])){
					$id = $_GET['id'];
					$ci = $_GET['ci'];
					$stat = $_GET['stat']; 
					if($stat == '1'){
						$x = '2';
					}else{
						$x = '1';
					}
					mysqli_query($con,"UPDATE postattachment set title = '$x' where postAttachementID = '$id'");
					
				}

	header("location:../index.php?ci=$ci");
	
?>