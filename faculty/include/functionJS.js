$(document).ready(function () {
    $('html, body').animate({
        scrollTop: $('#x').offset().top
    }, 1);
});

$('#addClass').click(function(){
	var section = $('#section').val();
	var subject = $('#subject').val();
	var facultyID = $('#facultyID').val();
		$.ajax({
				type: "POST",
				url: 'ajaxProcess/addClass.php',
				data: {section:section,subject:subject},
				success: function(data){					
					alert(data);					
					$('#classTBody').load('../include/function.php?classTable=1');
				}
			});
});






