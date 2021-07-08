
<?php
session_start();
ob_start();	
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://localhost/MarkUps-Rex/Rex/index.php -->
<html lang="en" class=""><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt :Registration</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="http://localhost/lensart_home/assets/images/icon.png">
    <!-- Font Awesome -->
    <link href="./LensArt _ signup_files/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./LensArt _ signup_files/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./LensArt _ signup_files/slick.css"> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="./LensArt _ signup_files/jquery.fancybox.css" type="text/css" media="screen"> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="./LensArt _ signup_files/animate.css">  
     <!-- Theme color -->
    <link id="switcher" href="./LensArt _ signup_files/default.css" rel="stylesheet">
    
    <link href="./LensArt _ signup_files/preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="./LensArt _ signup_files/style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href="./LensArt _ signup_files/css" rel="stylesheet" type="text/css">
    <!-- Raleway for Title -->
    <link href="./LensArt _ signup_files/css(1)" rel="stylesheet" type="text/css">
    <!-- Pacifico for 404 page   -->
    <link href="./LensArt _ signup_files/css(2)" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
  
  <title>LensArt:Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


  
  </head>
  <body style="overflow: visible;">

      

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
	
      <!-- Header image -->
      <img src="./LensArt _ signup_files/bali1.jpg" alt="img">
      <div class="header-overlay">
	 <table>
	  <tr><td>
	  <div class="header-la-area">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <a class="header-la-area" href="index.html"><img src="./LensArt _ signup_files/LA.png" alt="logo"></a> 
		   </div>
		   </td>           
		   <td>
		  <div class="header-call-area" style="margin-left: 575px;">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
		 
         
        </div></td>
       
		 <!--<div class="header-wlc-area">
        
        </div>  -->
		<td>
	  <div class="header-btn-area" style="margin-top: 0px;">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <a class="download-btn" style="margin-left: 195px; " href="../../lensart_login/LensArt_loginnew.php"  style="margin-left: 805px; margin-top:5px;">Login/Sign up</a>
        </div></td></tr>
		</table>
           </div>      
    </div> 
  </header>
  <!-- End header section -->
  
  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container" style="width:1218px;">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
                          
       </div>
       
               
                
    </nav> 
  </section>
  <!-- End menu section -->

<div class="limiter">
		<div class="container-login100">
			
			
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" style="margin: auto;">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-59">
						Registration
					</span>
					
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text"name="name" placeholder="Name..." onkeypress="phoneno()"  maxlength="15">
						<span class="focus-input100"></span>
					</div>	
					
					<script>
					function phoneno(){          
							$('#phone').keypress(function(e) {
							var a = [];
							var k = e.which;

							for (i = 48; i < 58; i++)
							a.push(i);

							if (!(a.indexOf(k)>=0))
							e.preventDefault();
							});
							}
					
					</script>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100"><abbr title="enter valid email for verificaion">Email</abbr></span>
						<input class="input100" type="email" id="email" name="email" placeholder="Email addess..." onblur="validate(this);" >
							<script> 
							function validate(email){
        var reg = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

        if (reg.test(email.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
							</script> 
						
						
						<span class="focus-input100"></span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" id="password" placeholder="*********"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
						 
						<span class="focus-input100"></span>
					</div>
 

					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" type="password" name="repass"id="confirm_password" placeholder="********"   >
					</div>
					
					<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$(document).ready(function(){
$('.pass_show').append('<span class="ptxt">Show</span>');  
});
  

$(document).on('click','.pass_show .ptxt', function(){ 

$(this).text($(this).text() == "Show" ? "Hide" : "Show"); 

$(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 

});  

</script>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
									
								</span>
								<br>
							</label>
								
							</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn" style="background: gray;"></div>
							<button class="login100-form-btn" name="logi" onclick="send_otp()">
								submit
							</button>
						</div>
							<a href="http://localhost/Login_v5/LensArt_loginnew.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
						
				</form>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
	
	

</script>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<?php
$c=mysqli_connect("localhost","root","","lensart");
if($c)
{
if(isset($_POST["logi"]))
{
$fm=$_POST['name'];
$em=$_POST['email'];
$psd=$_POST['pass'];
$ins= "insert into user values('','$fm','$em','$psd')";


if(mysqli_query($c,$ins))
{
		header("Location: http://localhost/lensart_signup/submit_otp.php"); 
}
else
{
	echo mysqli_error($c);
}
}
else
{
	echo mysqli_error($c);
}

}
/*
$q="delete from user where fname like 'Zehn'";
mysqli_select_db($c,"lensart");
if(mysqli_query($c,$q))
{
echo "<br><br>Record is deleted successfully";
}
else
{
echo mysqli_error($c);

} */

mysqli_close($c);
?>
	
  
  </body></html>