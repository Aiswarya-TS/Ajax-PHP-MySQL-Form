$('#myform').submit(function(){
	return false;
});



$("#myform").submit(function(e) {
    e.preventDefault();

    var username     = $('#username').val();
    var password    = $('#password').val();
    

    //This condition will only be true if each value is not an empty string
    if(username && password){






//$('#insert').click(function(){
	$.post(		
		$('#myform').attr('action'),
		$('#myform :input').serializeArray(),
		function(result){
			$('#result').html(result);
			 $("#myform")[0].reset();
		}
	);
//});

	}});
