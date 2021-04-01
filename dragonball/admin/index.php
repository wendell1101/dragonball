<?php
		
	   include '../include/function.php'; 
	   include '../include/sessionH.php';
	
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/phot/MONITORING.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
CHECK
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="../assets/css/icon.css" />
  <link rel="stylesheet" href="../assets/css/icon.min.css">
  <link href="../assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <H3 class="text-xs font-weight-bold text-uppercase mb-1">
        CHECK FOR ADMIN
        </H3>
		<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('../assets/img/phot/try1.png'); background-size:cover;background-position: center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 ml-auto mr-auto" id='logdangerrm'>
          <div class="card card-login">
              <div class="card-header card-header text-center">
                <h4 class="card-title">
					<img src='../assets/img/phot/MONITORING.png' width='280' height='270'>
				</h4>
               
              </div>
      
              <div class="card-body"> 
					 <div class="social-line">
						<b>
							<centeR>
								<h4 id='msgTextLogin' style='display:none' class='btn-danger btn-round' style='width:50%;'>Sign Up dangerful You may Login Now</h4>
							</center>
						</b>
					 </div>
					<form method='post'> 
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">assignment_ind</i>
								</span>
							  </div>
							  <input type="text" class="form-control" name='username' placeholder="Username" id='idno'>
							</div>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">lock_outline</i>
								</span>
							  </div>
							  <input type="password" class="form-control" name='password' placeholder="Password..." id='password'>
							</div>				
								 <center>
									<button class='btn btn-danger btn-sm' name ='login' id='loginButton'>Login</button>
								</center>			
							</div>
						  </div>
					</forM>
            
          </div>
		  
		  
		 
              
            
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, CHECK
          
        </div>
      </div>
    </footer>

  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/index.js" type="text/javascript"></script>

</body>

</html>


<?php

	if(isset($_POST['login'])){
		logInAdmin($con,$_POST['username'],$_POST['password']);
	}
?>