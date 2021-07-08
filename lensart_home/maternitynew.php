<?php
session_start();
ob_start();

		
if(isset($_POST["2ndmet"]))
{
	$_SESSION['PackagePrice']="18,0000 INR";
	$_SESSION['PackageType']="Baby Shower";
	header("location:http://localhost/lensart_signup/eventform.php");
}
if(isset($_POST["1stmet"]))
{
	$_SESSION['PackagePrice']="7,500 INR";
	$_SESSION['PackageType']="Silver";
	header("location:http://localhost/lensart_signup/eventform.php");
}

$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");

	
$qry="select * from maternity where id=1";
$log1=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log1))
	{		
		  $one2=$row['Baby Shower'];
		
	}

$qry="select * from maternity where id=2";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $two2=$row['Baby Shower'];
		
	}	

$qry="select * from maternity where id=3";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $three2=$row['Baby Shower'];
		
	}	
	
	
$qry="select * from maternity where id=4";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $four2=$row['Baby Shower'];
		
	}	



$qry="select * from maternity where id=5";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $five2=$row['Baby Shower'];
		
	}	




$qry="select * from maternity where id=6";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $six2=$row['Baby Shower'];
		
	}	

$qry="select * from maternity where id=8";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $eight2=$row['Baby Shower'];
		
	}	
	
$qry="select * from maternity where id=9";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $nine2=$row['Baby Shower'];
		
	}	

$qry="select * from maternity where id=7";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $seaven2=$row['Baby Shower'];
		
	}		
	
	$qry="select * from maternity where id=1";
$log1=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log1))
	{		
		  $one1=$row['silver'];
		
	}

$qry="select * from maternity where id=2";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $two1=$row['silver'];
		
	}	

$qry="select * from maternity where id=3";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $three1=$row['silver'];
		
	}	
	
	
$qry="select * from maternity where id=4";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $four1=$row['silver'];
		
	}	
$qry="select * from maternity where id=5";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $five1=$row['silver'];
		
	}	
$qry="select * from maternity where id=6";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $six1=$row['silver'];
	}	
$qry="select * from maternity where id=7";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $seaven1=$row['silver'];
		
}
	
$qry="select * from maternity where id=8";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $eight1=$row['silver'];
		
	}	

	
$qry="select * from maternity where id=9";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $nine1=$row['silver'];
		
	}	



	if(isset($_POST['imgupd']))
	{
		//	echo $_POST['upd'];
		
		
	}
}
mysqli_close($c);


		
?>	

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LensArt : Maternity</title>
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
	  
	  <table>
	  <tr><td>
	  <div class="header-la-area">
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
          <a class="header-la-area" href="indexlogin.php"><img src="assets/images/LA.png" alt="logo"></a> 
		   </div>
		   </td>           
		   <td>
		  
         <!-- <a class="knowmore-btn" href="#">Home</a> -->
		 
         </td>
       
		 <!--<div class="header-wlc-area">
         
        </div>  -->
		
			<td>  
			<div class="dropdown" style="margin-left:65s0px">
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
  
    <a href="logout.php">Logout 
	<i style="font-size:24px" class="fa">&#xf08b;</i></a>
    <a href="indexlogin.php" >home page<i style="font-size:24px" class="fa">&#xf015;</i></a>
	 <a href="../userprofile.php">Profile<i style="font-size:24px" class="fa">&#xf007;</i></a>
	<a href="status.php">Status 
	<i style="font-size:24px" class="fa fa-tasks"></i></a>
     </div>
</div>


			</td></tr>
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
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll"style="width: 117%;">
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
              <h2 class="tittle"> Maternity Sample Images </h2>
              <span class="tittle-line"></span>
            
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>  	
  <!-- End Portfolio section -->
  <a href="http://localhost/lensart_home/maternity-inner.php">
	<table> <tr> <td>
	<div class="album">
	
		<table style=" margin-left: 260px;">
			<tr style="padding:0px;">
				<td rowspan=2 colspan=2 style="padding:0px;" >
					 <?php
	$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
	//if(isset($_POST['imgdis'])){	
	$res=("select (maternity)from photos where id=1");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img width='180px' height='200' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				
			</tr>
			
			<tr style="padding:0px;" >
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
			</tr>
			<tr style="padding:0px;" >
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				<td  style="padding:0px;">
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				
			</tr>
		</table>
	 </td>
		<td>
		<table >
			<tr class= style="padding:0px;">
				<td rowspan=2 colspan=2 style="padding:0px;" >
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
	<img width='180px' height='200' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				
			</tr>
			
			<tr class="space" style="padding:0px;" >
				<td  style="padding:0px;" >
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
	<img width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
			</tr>
			<tr class="space" style="padding:0px;" >
				<td  style="padding:0px;" >
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
	<img rowspan=2 colspan=2 width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
					
				</td>
				<td  style="padding:0px;" >
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
	<img rowspan=2 colspan=2 width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>
				<td  style="padding:0px;">
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
	<img rowspan=2 colspan=2 width='90px' height='100' src="../../edmin/code/upload/<?php echo $row['maternity']; ?> "/>
	<?php
	 
		
	}	
	}
		?>
				</td>		
			</tr>
		</table>	
		</td>	
	</table></a>
	</div>
	<div class="pckg">
	
  <!-- Start Pricing Table section -->
  <form method="POST">
  <section id="pricing-table" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle" >Packages</h2>
              <span class="tittle-line"></span>
              <p></p>
            </div> 
            <!-- service content -->
			 
            <div class="pricing-table-content" style="margin-left: 250px;">
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                     
                   <span class="price-amount"><?php echo $one2; ?></span>
                       <p><?php echo $two2; ?></p>
                      <p><?php echo $three2; ?></p>
                      <p><?php echo $four2; ?></p>
                      <p><?php echo $five2; ?></p>
                      <p><?php echo $six2; ?></p>
                      <p><?php echo $seaven2; ?></p>
						 <button data-text="BOOK NOW" class="button button-default" name="2ndmet" type="submit">
				
								<span>	BOOK NOW </span>
							</button>
                     
                    </div>
                  </li>
                
                  <li class="wow slideInUp">
                    <div class="single-price">
                     
                     <span class="price-amount"><?php echo $one1; ?></span>
                      <p><?php echo $two1; ?></p>
                      <p><?php echo $three1; ?></p>
                      <p><?php echo $four1; ?></p>
                      <p><?php echo $five1; ?></p>
                      <p><?php echo $six1; ?></p>
                      <p><?php echo $seaven1; ?></p>
                      <button data-text="BOOK NOW" class="button button-default" name="1stmeten" type="submit">
				
								<span>	BOOK NOW </span>
							</button>
                    </div>
                  </li>
                 
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </form>
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
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>