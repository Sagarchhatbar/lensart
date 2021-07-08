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
    <title>LensArt :Admin Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="C:/xampp/htdocs/Login_v5/assets/images1/icon1.png">
    <!-- Font Awesome -->
    <link href="./LensArt _ login_files/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./LensArt _ login_files/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="./LensArt _ login_files/slick.css"> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="./LensArt _ login_files/jquery.fancybox.css" type="text/css" media="screen"> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="./LensArt _ login_files/animate.css">  
     <!-- Theme color -->
    <link id="switcher" href="./LensArt _ login_files/default.css" rel="stylesheet">
    
    <link href="./LensArt _ login_files/preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="./LensArt _ login_files/style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href="./LensArt _ login_files/css" rel="stylesheet" type="text/css">
    <!-- Raleway for Title -->
    <link href="./LensArt _ login_files/css(1)" rel="stylesheet" type="text/css">
    <!-- Pacifico for 404 page   -->
    <link href="./LensArt _ login_files/css(2)" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
  
  <title>LensArt:Admin Login</title>
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

 


   <div class="header-la-area">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <a class="header-la-area" href="http://localhost/lensart_home/index.html">
		  <img src="./LensArt _ login_files/lablack.png" alt="logo" style="margin-left: 502px;"></a> 
		   </div>

  <div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="border: 1px solid; padding-top: 10px;">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-53">
						Admin Login
					</span>

					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="aemail" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="apass" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="adm">
							Sign In
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	
	<div id="end-line" style="background: linear-gradient(to bottom,rgba(0,0,0,.14),rgba(0,0,0,.03) 3px,transparent)" >
	</div>
	 <div class="footer-bottom1">
      <p>Designed by <a rel="nofollow" href="http://localhost/lensart_home/index.php">LensArt Studio</a></p>
    </div>
	
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
	if(isset($_POST["adm"]))
	{
		$c=mysqli_connect("localhost","root","");
	if($c)
	{
			mysqli_select_db($c,"Lensart");
			$aid=$_POST['aemail'];
			$aps=$_POST['apass'];
			$qry="select * from admin where aemail='$aid' AND apass='$aps'";
			$log1=mysqli_query($c,$qry);
		if($row=mysqli_fetch_assoc($log1))
		{		
			$f=$row['aemail'];
			$_SESSION['uemail']=$f;
			header("location:http://localhost/edmin/code/index.php");
			ob_end_flush();
		}
		else
		{
			echo mysqli_error($c);
		}
	}
	mysqli_close($c);
}

				
	
	?>