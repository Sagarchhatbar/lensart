<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class="form-group">
				<input type="text" name="otp" id="otp" placeholder="otp">
			<span id="otp_error"></span>
			</div>
				<div class="form-group">
				<button type="button" name="submit" onclick="submit_otp()">submit otp</button>
			</div>
			
			<script type="text/javascript">
				

				function submit_otp()
	{
		var otp = jQuery('#otp').val();
		jQuery.ajax({
			url:'checkotp.php',
			type:'post',
			data:'otp='+otp,
			success:function(result){
					
					if (result=='yes')
					{	
						window.location.href = "http://localhost/lensart_login/LensArt_loginnew.php";
					
					}
					if (result=='no')
					{	
								jQuery('#otp_error').html('please enter valid otp');
					}
			}
		})
	}
			</script>

</body>
</html>