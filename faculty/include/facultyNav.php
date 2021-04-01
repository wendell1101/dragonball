 <?php 
	$base = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

	if($base == "index.php"){$index = "active";}else{$index='';}
	if($base == "room.php"){$room = "active";}else{$room='';}
	if($base == "monitoring.php"){$monitoring = "active";}else{$monitoring='';}
	if($base == "message.php"){$message = "active";}else{$message='';}
	if($base == "record.php"){$records = "active";}else{$records='';}
	
?>
 
 <div class="row" id='x'>
          <div class="col-md-9 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link <?php echo $index; ?>" href="index.php">
                    <i class="material-icons">accessibility</i>ADD ROOM AND SUBJECT     
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo $room; ?>" href="room.php">
                    <i class="material-icons">dynamic_feed</i> ADD GOOGLE MEET LINK
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo $monitoring; ?>" href="monitoring.php">
                    <i class="material-icons">face</i> MONITORING STAFF
                  </a>
                </li>	
				<li class="nav-item">
                  <a class="nav-link <?php echo $records; ?>" href="onlinechatting/index.php">
                    <i class="material-icons">language</i> ONLINE CHATTING
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>