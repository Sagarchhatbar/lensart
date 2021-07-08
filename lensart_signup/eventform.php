<?php
session_start();
ob_start();
				
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://localhost/MarkUps-Rex/Rex/index.php -->
<html lang="en" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt :Book event</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="http://localhost/MarkUps-Rex/Rex/assets/images/icon.png">
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
  
  <title>LensArt:Book event</title>
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
<!--===============================================================================================-->


  
  </head>
  <body style="overflow: visible;">

  <!-- BEGAIN PRELOADER -->
  <div id="preloader" style="display: none;">
    <div class="loader" style="display: none;">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->    

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
          <a class="header-la-area" href="indexlogin.php"><img src="./LensArt _ signup_files/LA.png" alt="logo"></a> 
		   </div>
		   </td>           
		   <td>
		 
       
		 <!--<div class="header-wlc-area">
         
        </div>  -->
		<td>  
			<div class="dropdown" style="margin-left:825px">
  <button class="dropbtn" style="margin-left:-47px;  color: white;
  font-size: 24px;
  border: white; "> 
  <?php
	
				 
						
				if(isset($_SESSION['email']))
				{
					echo "welcome ".$_SESSION['uname'];
				}
				  else
				{
							header("location:index.php");
				} 
				
				?>
				
						</button>

  <div class="dropdown-content">
  
    <a href="http://localhost/lensart_home/logout.php">Logout 
	<i style="font-size:24px" class="fa">&#xf08b;</i></a>
    <a href="http://localhost/lensart_home/indexlogin.php" >home page<i style="font-size:24px" class="fa">&#xf015;</i></a>
	 <a href="http://localhost/lensart_home/userprofile.php">Profile<i style="font-size:24px" class="fa">&#xf007;</i></a>
	<a href="http://localhost/lensart_home/status.php">Status 
	<i style="font-size:24px" class="fa fa-tasks"></i></a>
     </div>
</div>


			</td>
</tr>
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
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll" style="display: inline-block;">
           <li><a href="http://localhost/lensart_home/weddingnew.php">Wedding shoots</a></li>                    
            <li><a href="http://localhost/lensart_home/maternitynew.php">Meternity shoots</a></li> 
            <li><a href="http://localhost/lensart_home/bdaynew.php">Birthday shoots</a></li>
                        
            <li><a href="http://localhost/lensart_home/engagementnew.php">Engegement Shoots</a></li>     
          </ul>                            
        </div><!--/.nav-collapse -->
               
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

<div class="limiter">
		<div class="container-login100">
			
			
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" style="margin: auto;">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-59">
						Bookevent
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						
						<span class="label-input100">Event City</span>
						<input class="input100" type="text" name="city" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>	

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Choose event date</span>
						<input class="input100" type="date" name="date" id="date" onchange="checkDate()">
						<script type="text/javascript">
							function checkDate() 
							{
							var selectedText = document.getElementById('date').value;
							var selectedDate = new Date(selectedText);
							var now = new Date();
								if (selectedDate < now) 
								{
									alert("Date must be in the future");
								}
							}
						
						</script>
						<span class="focus-input100"></span>
						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "required">
						<span class="label-input100">your name</span>
						<input class="input100" type="text" name="uname" placeholder="User Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">contact number</span>
						<input class="input100" type="text" name="number" onKeypress="return isNumber(event)" placeholder="Phone/Contact" onKeypress="phoneno()" maxlength="10" pattern="[789][0-9]{9}">
						<script>        
							function phoneno(){          
							$('#phone').keypress(function(e) {
							var a = [];
							var k = e.which;
							

							for (i = 48; i < 58; i++)
							a.push(i);

							if (!(a.indexOf(k)>=0) || k > 10)
							e.preventDefault();
							});
							}
							function isNumber(evt) {
								evt = (evt) ? evt : window.event;
								var charCode = (evt.which) ? evt.which : evt.keyCode;
								if (charCode > 31 && (charCode < 48 || charCode > 57)) {
									return false;
									}
    return true;
}
							
       </script>

						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">						
							</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn" style="background: gray;"></div>
							<button class="login100-form-btn" name="Book" type="submit">
								Booknow
							</button>
						</div>

						
					</div>
				</form>
			</div>
		</div>
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
if(isset($_SESSION['uname']))
{ 	
$c=mysqli_connect("localhost","root","");
if($c)
{
if(isset($_POST["Book"]))
{
	echo "loged in";	
$ecity=$_POST['city'];
$edate=$_POST['date'];
$unm=$_POST['uname'];
$num=$_POST['number'];
$rs=$_SESSION['PackagePrice'];
$packnm=$_SESSION['PackageType'];
$td=date("M,d,Y h:m:s A");

$e=$_SESSION['email'];
$_SESSION['Ecity']=$ecity;
$_SESSION['Edate']=$edate;
$_SESSION['unm']=$unm;
$_SESSION['num']=$num;
$_SESSION['PackagePrice']=$rs;
$_SESSION['PackageType']=$packnm;

echo $e;
$ins= "insert into bookevent (Ecity,Edate,uname,number,PackageName,Price,Ctimedate,req,email) values('$ecity','$edate','$unm','$num','$packnm','$rs','$td','2','$e')";
mysqli_select_db($c,"Lensart");
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('Request is sent'); </script><br>";
	header("location:../lensart_home/status.php");
}
else
{
	echo mysqli_error($c)."abc";
}
}
else
{
	echo mysqli_error($c)."xyz";
}

}
}
				 else
				{
							header("location:../lensart_login/LensArt_loginnew.php");
				} 
?>
  </body></html>