<?php
	include '../../include/function.php';
	include '../../include/sessionT.php';
	
	if(isset($_POST['question'])){
		
		if($_POST['roomType'] == '1'){
			$choiceA = $_POST['choiceA'];
			$choiceB= $_POST['choiceB'];
			$choiceC = $_POST['choiceC'];
			$choiceD = $_POST['choiceD'];
		}else if($_POST['roomType'] == '2'){
			$choiceA = $_POST['choiceA'];
			$choiceB= $_POST['choiceB'];
			$choiceC = "";
			$choiceD = "";
		}else if($_POST['roomType'] == '3'){
			$choiceA = "";
			$choiceB= "";
			$choiceC = "";
			$choiceD = "";			
		}
		
		$question = $_POST['question'];		
		$faculty = $_SESSION['faculty'];
		$assessmentID = $_POST['assessmentID'];
		
			if(!isset($_POST['correct'])){
				echo 1;				
			}else{
				$correct = $_POST['correct'];
				mysqli_query($con,"INSERT into assessmentForm (question,choice1,choice2,choice3,choice4,assessmentID,correct,roomType) VALUES ('$question','$choiceA','$choiceB','$choiceC','$choiceD','$assessmentID','$correct',".$_POST['roomType'].")");
			}
		
				
	}
?>