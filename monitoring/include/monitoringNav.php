 <?php 
	$base = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

	if($base == "index.php"){$index = "active";}else{$index='';}
	if($base == "room.php"){$room = "active";}else{$room='';}
	if($base == "assessment.php"){$assesment = "active";}else{$assesment='';}
	if($base == "message.php"){$message = "active";}else{$message='';}
	if($base == "record.php"){$records = "active";}else{$records='';}
	
?>
 
 <div class="row" id='x'>
          <div class="col-md-9 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link <?php echo $index; ?>" href="index.php">
                    <i class="material-icons">check_circle_outline</i> FACULTY AND SCHEDULE
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo $room; ?>" href="room.php">
                    <i class="material-icons">supervised_user_circle</i> FACULTY DETAILS
                  </a>
                </li>
				

			 <li class="nav-item">
                  <a class="nav-link <?php echo $assesment; ?>" href="onlinechatting/index.php">
                    <i class="material-icons">language</i> ONLINE CHATTING
                  </a>
                </li>
				
				
				
              </ul>
            </div>
          </div>
        </div>