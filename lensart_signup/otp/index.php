<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
</head>
<body>
	<center>
		<form method="post">
			<div class="form-group">
				<input type="text" name="email" id="email" placeholder="email">
				<span id="email_error"></span>
			</div>
			<div class="form-group">
				<button type="button" name="submit" onclick="send_otp()">send otp</button>
			</div>
</form>
</center>
<script type="text/javascript">
	
	function send_otp()
	{
		var email = jQuery('#email').val();
		jQuery.ajax({
			url:'sendotp.php',
			type:'post',
			data:'email='+email,
			success:function(result){
					
					if (result=='OTP Successfully send')
					{	
						window.location.href = "http://localhost/lensart_signup/otp/submitotp.php";
					}
					if (result=='no')
					{	
					jQuery('#email_error').html('please enter valid email');
					}
			}
		})
	}

</script>


</body>
</html>