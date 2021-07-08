<?php
session_start();
ob_start();
if(isset($_SESSION['uname']))
				{
						//header("location:http://localhost/edmin/code/2nd-innner-maternity.php");
				}
			
if(isset($_POST["2nd"]))
{
	//header("location:'http://localhost/Login_v13/.php'");

}
if(isset($_1POST["1st"]))
{

	
}
if(isset($_POST["3rd"]))
{
	
	
}
				
?>
		
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt : maternity</title>
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
    <link href="style.css" type="text/css" rel="stylesheet">


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
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <!-- <a class="download-btn" href="logout.php">Logout</a>
       
             </div>   </td>   -->
			<td>
			          <div class="download-btn" style="padding:0; margin-left:700px">+919428618310</div>
        </div></td>
			</td>
			<td>  
			<div class="dropdown" style="margin-left:0">
  <button class="dropbtn" style="margin-left:0"> 
  <?php
	
				 
						
				
				if(isset($_SESSION['uname']))
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
    <a href="logout.php">Logout</a>
    <a href="#">Profile</a>
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

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">maternity Shoots</h2>
              <span class="tittle-line"></span>
            
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>  	
  <div class="gallary">
 <a class="fancybox"  data-fancybox-group="gallery" title="Photography">
	<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	$res=("select (maternity)from photos where id=1");	
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img class="picture" height="400px" width='350px' style="float:left;" src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		</a>
	   <a class="fancybox"  data-fancybox-group="gallery" title="Photography">
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=2");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
		<img class="picture" height="400px" width='350px' style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		</a><a>
	  <?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=3");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
		<img class="picture" height="400px" width='350px'  style="float:left;" src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		</a><a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=4");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
		<img class="picture" height="400px" width='350px'  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
			</a><a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=5");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=6");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=7");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=8");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=9");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=10");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=11");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		<a>
		<?php		
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");			
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=12");
	$res1=mysqli_query($c,$res);
	
	while($row = mysqli_fetch_array($res1))	
	{
		
	?>
	<img class="picture" width='350px' height="400px"  style="float:left;"  src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php	
	}	
	}
		?>
		
		</a>
		</div>
  <!-- Start Pricing Table section -->
 
  
  <div class="footer-bottom" style="background:black">
      <p>Designed by <a rel="nofollow" href="http://localhost/lensart_home/Rex/indexlogin.php">LensArt Studio</a></p>
    </div>
	
  	
	<div>
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
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox1.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  </body>
</html>