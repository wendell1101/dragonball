<?php
		
	  include 'include/function.php' ;
	   include 'include/sessionH.php';
	
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/phot/MONITORING.png">
  <link rel="icon" type="image/png" href="assets/img/phot/MONITORING.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
CHECK
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="assets/css/icon.css" />
  <link rel="stylesheet" href="assets/css/icon.min.css">
  <link href="assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <H3>
       
        </H3>
		<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">add_task</i>sign up
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="javascript:;" class="dropdown-item" id='buttonSignUpMonitoring'>
                <i class="material-icons">group</i> Monitoring
              </a>
              <a href="javascript:;" class="dropdown-item" id='buttonSignUpFaculty'>
                <i class="material-icons">perm_identity</i> Faculty
              </a>
			
            </div>
          </li> 
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" style="background-image: url('assets/img/phot/nga.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6 ml-auto mr-auto" id='loginForm'>
          <div class="card card-login">
            
              <div class="card-header  text-center">
                <h4 class="card-title">
					<img src='assets/img/phot/MONITORING.png'width='350' height='350'>
				</h4>
               
              </div>
      
              <div class="card-body"> 
				<form method='post' action='ajaxProcess/login.php'>
					 <div class="social-line">
						<b>
							<centeR>
								<h4 id='msgTextLogin' style='display:none' class='btn-success btn-round' style='width:50%;'>Sign Up Successful You may Login Now</h4>
							</center>
						</b>
					 </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">assignment_ind</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name='IDno' placeholder="Employee ID" id='idno'>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name='password' placeholder="Password" id='password'>
                </div>				
					 <center>
						<button class='btn btn-danger btn-lg-4' id='loginButton'>Login</button>
					</center>	
				</form>
				</div>
              </div>
              
            
          </div>
		  
		  <!---STUDENT REGISTRATION---->
		  
		  <div class="col-lg-9 col-md-9 ml-auto mr-auto" id='monitoringSignUpForm' style='display:none;'>
          <div class="card card-login">
            
              <div class="card-header  text-center">
                <h4 class="card-title">
				<img src='assets/img/phot/MONITORING.png'width='350' height='350'>
					<br>Sign Up Monitoring
				</h4>
                
              </div>
			
				<div class="card-body"> 
					<div class="social-line" >
						<b>
							<centeR>
								<h4 id='msgTextMonitoring' style='display:none' class='btn-success btn-round' style='width:50%;'>Sign Up Successful You may Login Now</h4>
							</center>
						</b>
					</div>
					<div class='row'>
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">assignment_ind</i>
								</span>
							  </div>
							  <input type="text" name='monitoringID' class="form-control" placeholder="Employee ID">
							</div>
						</div>	
						
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">lock</i>
								</span>
							  </div>
							  <input type="password" name='password' class="form-control" placeholder="Password">
							</div>
						</div>

						<div class='col-md-4'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">perm_identity</i>
								</span>
							  </div>
							  <input type="text" name='firstname' class="form-control" placeholder="First name">
							</div>
						</div>

						<div class='col-md-4'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">perm_identity</i>
								</span>
							  </div>
							  <input type="text" name='middlename' class="form-control" placeholder="Middle name">
							</div>
						</div>
						
						<div class='col-md-4'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">perm_identity</i>
								</span>
							  </div>
							  <input type="text" name='lastname' class="form-control" placeholder="Last name">
							</div>
						</div>
						
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">receipt</i>
								</span>
							  </div>
							  <select id='yearSelect' name='yearLevel' class='form-control'>
								<option value=''> Work Schedule</option>
						
<option value='11'> Full-time</option>
<option value='11'> Part-time</option>


							  </select>
							</div>
						</div>
						
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">supervised_user_circle</i>
								</span>
							  </div>
							  <select id='sectionSelect' name='section' class='form-control'>
									<option value=''>Department</option>
							  </select>
							</div>
						</div>
						
						 <center>
						 
	
							
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-info btn-sm' style='width:200px;' id='buttonMonitoringSignUp' >Sign Up</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-info btn-sm' style='width:200px;' id='loginHere' >Login</button>
					
						</center>	
							
					</div>
				</div>
              </div>
              
            
          </div>
		  
		  <div class="col-lg-9 col-md-9 ml-auto mr-auto" id='facultySignUpForm' style='display:none;'>
          <div class="card card-login">
            
              <div class="card-header  text-center">
                <h4 class="card-title">
				<img src='assets/img/phot/MONITORING.png'width='350' height='350'>
					<br>Faculty Sign Up
				</h4>
                <div class="social-line">
                 
                </div>
              </div>
			
				<div class="card-body"> 
				<div class="social-line" >
						<b>
							<centeR>
								<h4 id='msgTextFaculty' style='display:none' class='btn-success btn-round' style='width:50%;'>Sign Up Successful You may Login Now</h4>
							</center>
						</b>
					</div>
					<div class='row'>
						
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">assignment_ind</i>
								</span>
							  </div>
							  <input type="text" name='facultyID' class="form-control" placeholder="Employee ID">
							</div>
						</div>	
						
						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">lock</i>
								</span>
							  </div>
							  <input type="password" name='password' class="form-control" placeholder="Password">
							</div>
						</div>

						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">perm_identity</i>
								</span>
							  </div>
							  <input type="text" name ='firstname' class="form-control" placeholder="Firstname">
							</div>
						</div>

						<div class='col-md-6'>
							<div class="input-group">
							  <div class="input-group-prepend">
								<span class="input-group-text">
								  <i class="material-icons">perm_identity</i>
								</span>
							  </div>
							  <input type="text" name='lastname' class="form-control" placeholder="Lastname">
							</div>
						</div>
						<div class='col-md-12'><br></div>
						 <center>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-info btn-sm' style='width:200px;' id='buttonFacultySignUp' >Sign Up</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-info btn-sm' style='width:200px;' id='loginHere2' >Login</button>
						</center>

						
						</div>	
					</div>
				</div>
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
          </script>, ONLINE MONITORING
          
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/index.js" type="text/javascript"></script>
	<script>
	
	</script>
</body>

</html>
