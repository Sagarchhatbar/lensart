 <HTML>
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
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt : user profile</title>
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
          <a class="header-la-area" href="indexlogin.php"><img src="assets/images/LA.png" alt="logo"></a> 
        </div>  
			</td>
		<!--	<td>   	
		 <div class="header-wlc-area" style="   margin-left: 50px;">
        
        </div>  </td> -->
		<!-- <td> -->
		<div class="header-btn-area">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <!-- <a class="download-btn" href="logout.php">Logout</a>
       
             </div>   </td>   -->
			<td>
			         
        </div></td>
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
  <a data-text="home" class="button button-default" href="indexlogin.php" name="inlog" type="submit" style="margin-left:420px;">
				
								<span>	HOME </span>
							</a>
  <a data-text="update" class="button button-default" href="update.php" name="update" type="submit">
				
								<span>	UPDATE PROFILE </span>
							</a>
							
	<a data-text="status" class="button button-default" href="status.php" name="status" type="submit">
				
								<span>	STATUS </span>
							</a>
							
							
  <!-- End menu section -->
  
  
   <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
             <div class="header-la-area">	
               <a class="header-la-area" href="indexlogin.php"><img src="assets/images/LA.png" alt="logo"></a> 
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
	
			          <p class="download-btn" style="padding:0;">contact us: +919428618310</p>
					  <p>Designed by <a rel="nofollow" href="indexlogin.php">LensArt Studio</a></p></div>
        
      <p> <a rel="nofollow" href="http://localhost/lensart_home/Rex/indexlogin.php"> </a></p>
    </div>
  </footer>
  <!-- End Footer -->
  </body>
  </HTML>