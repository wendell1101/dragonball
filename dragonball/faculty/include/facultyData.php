		<div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              
                <img src="../assets/img/upload/img/<?php ProfilePicFaculty($con,$_SESSION['faculty']); ?>"  style='border-radius:1000px;width:150px;height:150px'>
              <hr>
              <div class="name">
				<input type='hidden' id='facultyID' value='<?php echo $_SESSION['faculty']; ?>'>
                <h3 class="title"><?php FacultyName($con,$facultyID); ?></h3>
                <h6>FACULTY</h6>
                </div>
            </div>
          </div>
        </div>