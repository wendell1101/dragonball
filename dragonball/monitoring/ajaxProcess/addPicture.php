<?php
	include '../../include/function.php';
	include '../../include/sessionS.php';
	
	
					

$target_dir = "../../assets/img/upload/img/";





$file_name = substr(strrchr(basename($_FILES["profilePic"]["name"]),'.'),1);
$new_name = md5(rand()).''.$_SESSION['monitoring'].'.'.$file_name;

$target_file = $target_dir . $new_name;
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists

// Check file size
if ($_FILES["profilePic"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
		
			mysqli_query($con,"UPDATE monitoring set img='$new_name' where monitoringID = '".$_SESSION['monitoring']."'");
			
        echo "The file ". basename( $_FILES["profilePic"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

							
			
				
	
			
	header("location:../profile.php");
?>