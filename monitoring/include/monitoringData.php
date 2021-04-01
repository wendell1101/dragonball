<div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <img src="../assets/img/upload/img/<?php ProfilePicMonitoring($con,$_SESSION['monitoring']); ?>"  style='border-radius:40px;width:200px;height:150px'>
              <div class="name">
                <h3 class="title"><?php MonitoringName($con,$monitoringID); ?></h3>
                <h6>Monitoring</h6>
               </div>
            </div>
          </div>
        </div>