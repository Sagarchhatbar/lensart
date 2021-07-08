

<!DOCTYPE html>
<html lang="en">
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ca4e2de6bba46052801160d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/icon.png"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">
    
    <link href="preloader.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">


    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- BEGAIN PRELOADER -->
 
  <!-- END PRELOADER -->    

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->  
  <header id="header">
    <div class="header-inner">
	
      <!-- Header image -->
      <img src="assets/images/bali1.jpg" alt="img">
		<div class="header-overlay">
	 
	  <table><tr>
	 <td>
	  <div class="header-la-area">	
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <a class="header-la-area" href="indexlogin.html"><img src="assets/images/LA.png" alt="logo"></a> 
        </div>  
			</td>
		<!--	<td>   	
		 <div class="header-wlc-area" style="   margin-left: 50px;">
        
        </div>  </td> -->
		<!-- <td> -->
		<div class="header-btn-area">
         <!-- <a c	lass="knowmore-btn" href="#">Home</a> -->
          <!-- <a class="download-btn" href="logout.php">Logout</a>
       
             </div>   </td>   -->
			<td></td>
			</td>
			
			<td>  
			<div class="dropdown" style="margin-left:65s0px">
  <button class="dropbtn" style="margin-left:0"> 
  <?php
	
				 
				session_start();			
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
  
    <a href="logout.php">Logout 
	<i style="font-size:24px" class="fa">&#xf08b;</i></a>
    <a href="indexlogin.php" >home page<i style="font-size:24px" class="fa">&#xf015;</i></a>
	 <a href="userprofile.php">Profile<i style="font-size:24px" class="fa">&#xf007;</i></a>
	<a href="status.php">Status 
	<i style="font-size:24px" class="fa fa-tasks"></i></a>
     </div>
</div>


			</td>

			 </tr></table>
			
		</div>			 
    
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
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
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
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

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>LensArt Studio</span></h2>
              <span class="tittle-line"></span>
              <p>How it Works ?</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">Create account</h4>
                    <p>Create account without any charges</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Choose your package</h4>
                    <p>Choose a plan that best suits your needs. Our plans have been designed to provide the best quality at great value</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Confirm your booking</h4>
                    <p>Reserve your booking by entering your details. Complete your booking by making the payment within 72 hours. We have limited slots for every city, so grab yours now!</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Relax</h4>
                    <p>You're done. You can sit back, relax and enjoy your event while we take care of the rest!</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
         

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/google.png" alt="client logo"></li>
              <li><img src="assets/images/amazon.png" alt="client logo"></li>
              <li><img src="assets/images/discovery.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/tuenti.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/google.png" alt="client logo"></li>
              <li><img src="assets/images/amazon.png" alt="client logo"></li>
              <li><img src="assets/images/discovery.png" alt="client logo"></li>
              <li><img src="assets/images/envato.png" alt="client logo"></li>
              <li><img src="assets/images/tuenti.png" alt="client logo"></li>                    
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- Start Google Map -->
  <section id="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section>
  <!-- End Google Map -->

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
             <div class="header-la-area">	
               <a class="header-la-area" href="index.html"><img src="assets/images/LA.png" alt="logo"></a> 
        </div>             
              <div class="footer-social">
                <a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="#"><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href="#"><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
                <a class="dribbble" href="#"><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="footer-bottom">
      <p>Designed by <a rel="nofollow" href="http://localhost/lensart_home/Rex/indexlogin.php">LensArt Studio</a></p>
	  <div class="download-btn" style="padding: 23px -8px;">Contact us: +918460936501</div>
        </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>