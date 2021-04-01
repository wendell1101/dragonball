
<script>
	$('#roomType').change(function(){
		var roomType = $(this).val();
		if(roomType == '1'){
			$('#sonata').load('include/Attendance.php');
		}else if (roomType == '2'){
			$('#sonata').load('include/trueorfalse.php');
		}else if (roomType == '3'){
			
			$('#sonata').load('include/identification.php');
		}
	});
</script>

<script>
/*	$('#postForm').submit(function(e){
		
	e.preventDefault();	
	
	var postText = $('#postText').val();		
	var ci = $('#ci').val();
	var room = $('#hiddenRoom').val();	
	var formData = new FormData(this);
	alert(formData);
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/addPost.php',
				data: formData,
				success: function(data){
					$('#postText').val("");
					$('#postWall').html(data);
				}
			});
			
	}) */
</script>


<script>
	$('#addRoomButton').click(function(){		
		var roomTitle = $('#roomTitle').val();
		var minutes = $('#minutes').val();
		$.ajax({
				type: "POST",
				url: 'ajaxProcess/addRoom.php',
				data: {roomTitle:roomTitle,minutes:minutes},
				success: function(data){					
					alert(data);					
					$('#roomTBody').load('../include/function.php?roomTable=1');
				}
			});
		
});
</script>

<script>
	$('#addExamButton').click(function(){		
		var examTitle = $('#examTitle').val();
		var minutes = $('#minutes').val();
		$.ajax({
				type: "POST",
				url: 'ajaxProcess/addExam.php',
				data: {examTitle:examTitle,minutes:minutes},
				success: function(data){					
					alert(data);					
					$('#examTBody').load('../include/function.php?examTable=1');
				}
			});		
});
</script>


<script>
	$('#addQuestion').click(function(){	
		var roomID = $('#roomID').val();
		var roomType = $('#roomType').val();
		var questionData = $('#questionaire').find('input, select').serialize();
		
		$.ajax({
				type: "POST",
				url: 'ajaxProcess/addQuestion.php',
				data: questionData,
				success: function(data){
					
						if(data == 1){
							$('#errorms').fadeIn();
							$('#errormsg').text("Please select Present to activate your attendance!");
						}else{
							$('#errorms').fadeOut();
								if(roomType == '1'){
									$('#choiceA').val('');
									$('#choiceB').val('');
									$('#choiceC').val('');
									$('#choiceD').val('');
									$('#question').val('');
								}else if(roomType == '2'){
									$('#question').val('');
								}
								else if(roomType == '3'){
									$('#question').val('');
									$('#correct').val('');
								}									
							
							$('#roomWall').load('../include/function.php?roomWall=1&qi='+roomID);
						}
						
						
					
					
				}
			});
		
});
</script>

<script>
	$('#addQuestionAss').click(function(){	
		var assessmentID = $('#assessmentID').val();
		var roomType = $('#roomType').val();
		var questionData = $('#questionaire').find('input, select').serialize();
		
		$.ajax({
				type: "POST",
				url: 'ajaxProcess/addQuestionAss.php',
				data: questionData,
				success: function(data){
					
						if(data == 1){
							$('#errorms').fadeIn();
							$('#errormsg').text("Please Select Prenset to activate attendance");
						}else{
							$('#errorms').fadeOut();
								if(roomType == '1'){
									$('#choiceA').val('');
									$('#choiceB').val('');
									$('#choiceC').val('');
									$('#choiceD').val('');
									$('#question').val('');
								}else if(roomType == '2'){
									$('#question').val('');
								}
								else if(roomType == '3'){
									$('#question').val('');
									$('#correct').val('');
								}									
							
							$('#examWall').load('../include/function.php?examWall=1&ai='+assessmentID);
						}
						
						
					
					
				}
			});
		
});
</script>

<script>
	$('#gg').click(function(){		
		$('#wakata').slideDown();
	});
</script>

<script>
	$('#closeModal').click(function(){		
		$('#wakata').slideUp();
	});
</script>


<script>
	$('.uploadRoom').click(function(){
		var roomID = $(this).attr('rel');
		var roomTitle = $(this).attr('axis');
		$('#nu').fadeIn();
		$('#roomTitleUpload').text(roomTitle);		
		$('#hiddenRoom').val(roomID);
		$('#wakata').slideUp();
	});
</script>

<script>	
	$('#msgText').on('keypress',function(e) {
		if(e.which == 13) {
			
			var message = $(this).val();
			var classID = $('#classIDhh').val();
			var monitoringID = $('#monitoringIDhh').val();
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/addMessage.php',
				data: {message:message,classID:classID},
				success: function(data){
					$('#chatbox').load('../include/function.php?forumChatBox=1&ci='+classID+'&user='+monitoringID);
					 $('#msgText').val('');
					 $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
				}
			});
			
			
		}
	});
</script>
<script>
	 $('#imageFile').change(function(e){
            var names = [];
			for (var i = 0; i < $(this).get(0).files.length; ++i) {
				names.push($(this).get(0).files[i].name);
				$('#imF').fadeIn();
				$('#fileTitleUpload').append(names+ "<br>");  
			}			
			          
        });
</script>
<script>
	setInterval(function(){ 
		var classID = $('#classIDhh').val();
		var facultyID = $('#facultyIDhh').val();
	
		$('#chatbox').load('../include/function.php?forumChatBox=1&ci='+classID+'&user='+facultyID);
		
	}, 100);
</script>


<script>
	$('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
</script>

<script>
	$('#profilePic').change(function(){
		
		readURL(this);
		$('#updateImageButton').fadeIn();
		$('#cancelImageUpload').fadeIn();
	});
	
	
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#dpPreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>

<script>
	$('#cancelImageUpload').click(function(){
		location.reload();
	});
</script>
