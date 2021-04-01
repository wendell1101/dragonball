<script>
	$('#classSearchButton').click(function(){
		var classID = $('#classSearchID').val();	
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/searchClass.php',
				data: {classID:classID},
				success: function(data){				
					$('#resultClass').html(data);
				}
			});
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
				}
			});
			
			
		}
	});
</script>
<script>
	setInterval(function(){ 
		var classID = $('#classIDhh').val();
		var monitoringID = $('#monitoringIDhh').val();
		$('#chatbox').load('../include/function.php?forumChatBox=1&ci='+classID+'&user='+monitoringID);
		
	}, 100);
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

<script>
	$('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
</script>







<!--FUNCTION FOR TIMER-->
<script>
	setInterval(function(){ 
		var timer = $('.timer').attr('rel');
		var roomTakeID = $('#roomTake').val();
		timer = ++timer;
		if(timer <= 0){
			location.reload();
		}
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/countDown.php',
				data: {timer:timer,roomTakeID:roomTakeID},
				success: function(data){
					
					$('.timer').text(timer);		
					$('.timer').attr('rel',timer);	
				}
			});
	}, 1000);
</script>