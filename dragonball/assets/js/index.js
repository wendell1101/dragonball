$('#yearSelect').change(function(){
	var yearLevel = $(this).val();
	
		$.ajax({
			type: "POST",
			url: 'ajaxProcess/loadSection.php',
			data: {yearLevel:yearLevel},
			success: function(data){				
				$('#sectionSelect').html(data);			
			}
		});					
});

$('#buttonSignUpMonitoring').click(function(){
	$('#loginForm').slideUp();
	$('#facultySignUpForm').slideUp();
	$('#monitoringSignUpForm').slideDown();
});

$('#buttonSignUpFaculty').click(function(){
	$('#loginForm').slideUp();
	$('#monitoringSignUpForm').slideUp();
	$('#facultySignUpForm').slideDown();
});

$('#loginHere').click(function(){
	$('#loginForm').slideDown();
	$('#monitoringSignUpForm').slideUp();
	$('#facultySignUpForm').slideUp();
});

$('#loginHere2').click(function(){
	$('#loginForm').slideDown();
	$('#monitoringSignUpForm').slideUp();
	$('#facultySignUpForm').slideUp();
});

$('#buttonMonitoringSignUp').click(function(){
	var monitoringData = $('#monitoringSignUpForm').find('input, select').serialize();

		$.ajax({
			type: "POST",
			url: 'ajaxProcess/signUpMonitoring.php',
			data: monitoringData,
			success: function(data){				
				$('#msgTextMonitoring').text(data);
				$('#msgTextMonitoring').fadeIn();
			}
		});	
})


$('#buttonFacultySignUp').click(function(){
	var facultyData = $('#facultySignUpForm').find('input, select').serialize();

		$.ajax({
			type: "POST",
			url: 'ajaxProcess/signUpFaculty.php',
			data: facultyData,
			success: function(data){				
				$('#msgTextFaculty').text(data);
				$('#msgTextFaculty').fadeIn();
			}
		});	
})

$('#loginButton').click(function(){
	var loginData = $('#loginForm').find('input, select').serialize();

		$.ajax({
			type: "POST",
			url: 'ajaxProcess/login.php',
			data: loginData,
			success: function(data){				
				$('#msgTextLogin').text(data);
				$('#msgTextLogin').fadeIn();
					if(data == "Welcome"){							
						window.location.reload();
					}else if(data == "Welcomes"){							
						window.location.reload();
					}
			}
		});	
})

$('#idno').on('keypress',function(e) {
		if(e.which == 13) {
			var loginData = $('#loginForm').find('input, select').serialize();
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/login.php',
				data: loginData,
				success: function(data){				
					$('#msgTextLogin').text(data);
					$('#msgTextLogin').fadeIn();
					if(data == "Welcome"){
						
						window.location.reload();
					}else if(data == "Welcomes"){					
						window.location.reload();
					}
				}
			});	
		
		}
});

$('#password').on('keypress',function(e) {
		if(e.which == 13) {
			var loginData = $('#loginForm').find('input, select').serialize();
			$.ajax({
				type: "POST",
				url: 'ajaxProcess/login.php',
				data: loginData,
				success: function(data){				
					$('#msgTextLogin').text(data);
					$('#msgTextLogin').fadeIn();
					if(data == "Welcome"){	
						window.location.reload();
					}else if(data == "Welcomes"){
						window.location.reload();
					}
				}
			});	
		
		}
});

