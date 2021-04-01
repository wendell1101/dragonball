<!DOCTYPE html>
<html>
<head>
	<title>CHECK</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		   <link rel="icon" type="image/png" href="../../assets/img/phot/MONITORING.png">
<style>
	#login_form{
		width:450px;
		height:570px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}
</style>
</head>
<body>
<div class="container">
     
	<div id="login_form" class="well">
	 <center>
 <a href="../index.php"><img src="../../assets/img/phot/MONITORING.png" alt="logo" style="width:250px;"></a></center>
	
		<h2><center><span class="glyphicon glyphicon-envelope" style="color:green"></span>&nbsp;DEPARTMENT CHATTING SYSTEM</center></h2>
		<hr>
		<form method="POST" action="login.php">
		Username: <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="../index.php"><span class="glyphicon glyphicon-home"></span>HOME</a>  <input type="text" name="username" class="form-control" required> 
		<div style="height: 10px;"></div>		
		Password: <span class="glyphicon glyphicon-lock"></span><input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button><a href="signup.php"> Sign up</a> for Chat?
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>