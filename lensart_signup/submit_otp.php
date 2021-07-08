<!DOCTYPE html>
<html>
<head>
	<title>otp_verification</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style type="text/css">
		.button {
  background-color: #0033cc; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
				}
		.text{
	border-color: blue;
	width: 80%;
	height: 55px;			
			}

			.form{
				border-style: groove;
				border-radius: 20px;
				
				width: 450px;
				height: 450px;
				display: grid;
			}

			.footer{
				background-color: black;
				margin: 20px;
				padding:40px;
				height:50px;
				width:98%;
			}
			p{
				margin: -15px;
			}
			
	</style>

</head>
<body>

	<div class="header-la-area">
    
          <a class="header-la-area" href="http://localhost/lensart_home/index.html">
		  <img src="lablack.png" alt="logo" style="margin-left: 550px;"></a> 
		   </div>
		   <br>
	<center>
		<form method="post" class="form">
			<h2>verify your email</h2>
			<div class="form-group ">
				<input type="email" class="text" name="email" id="email" placeholder="email" required>
				<span id="email_error"></span>
			</div>
			<div class="form-group">
				<button type="button" class="button" name="submit" onclick="send_otp()">send otp</button>
			</div>

			<div class="form-group">
				<input type="text" name="otp" class="text" id="otp" placeholder="otp" required>
			<span id="otp_error"></span>
			</div>
				<div class="form-group ">
				<button type="button" class="button" name="submit" onclick="submit_otp()">submit otp</button>
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
					alert('Email sent on your Email ID please check it out');
					//jQuery('.second_box').show;

				/*	if (result=='yes')
					{	
						jQuery('.second_box').show;
						jQuery('.first_box').hide;
						alert('Email sent on your Email ID please check it out');
					}
					if (result=='no')
					{	
					jQuery('#email_error').html('please enter valid email');
					}*/
			}
		})
		
	}
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
						alert('congratulations! you are verified.');
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
<center>
 <div class="footer">
 	<center>
      <p>Designed by <a rel="nofollow" href="http://localhost/lensart_home/index.php">LensArt Studio</a></p>
    </center>
    </div>
</center>
</body>
</html>