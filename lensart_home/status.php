<HTML>
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
			<div class="dropdown" style="margin-left:800px">
  <button class="dropbtn" style="margin-left:0"> 
  <?php
	
				 
				session_start();
				ob_start();		
				
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
             <li><a href="weddingnew.php">Wedding shoots</a></li>                   
            <li><a href="maternitynew.php">Meternity shoots</a></li> 
            <li><a href="bdaynew.php">Birthday shoots</a></li>         
            <li><a href="engagementnew.php">Engegement Shoots</a></li>  
          </ul>                            
        </div><!--/.nav-collapse -->
               
      </div>          
    </nav> 
  </section>
  
  
  
  <!-- End menu section -->
  </body>
  </HTML>

<?php

$c=mysqli_connect("localhost","root","");


if($c)
{
mysqli_select_db($c,"Lensart");
}	$se=$_SESSION['email'];
	

$qry="select * from bookevent ";
$log2=mysqli_query($c,$qry);
/*
//while($row=mysqli_fetch_array($log2))
//{
	if($se==$row['email'])
{
	$re=$row["req"];
	

if($re==1)
{
	echo "Approve";
}
else
{	
	echo "cancle";
}

}
//} */
$qry="select * from bookevent where email='$se'";
$log1=mysqli_query($c,$qry);

		
		while($row = mysqli_fetch_array($log1))
        {
		 $tempEcity=$row['Ecity'];
		 $tempEdate=$row['Edate'];
		 $tempuname=$row['uname'];
		 $tempnumber=$row['number'];
		 $temppname=$row['PackageName'];
		 $tempprice=$row['Price'];	
		 $tempctimedate=$row['Ctimedate'];	
		 $tempid=$row['id'];
		 $_SESSION['tid']=$tempid;
		 

			echo "<html><table class='table table-message'>
									<tbody>
										<tr class='heading'>
											<td class='cell-icon'></td>
											</tr>
											 <html><br><br></html>
											<td class='cell-title'>Event</td>";
											
										

									echo   "<tr class='task'>
											<td class='cell-icon'> <i class='icon-checker high'></i></td>
											<td class='cell-title'> </html>";
											echo "<html><h1></html>";
											//while($row=mysqli_fetch_array($log2))
//{
	if($se==$row['email'])
{
	$re=$row["req"];
	

if($re==1)
{
	echo " Your Shoot Request is Approved <strong>bill send to your email</strong>";
}
if($re==0)
{	
	echo "sorry! Your Shoot Request is cancled";
}
if($re==2)
{
	echo"Your Shoot Request is Not responded Yet";
}

}
//}
										echo "<html></h1></html>";	
											
										echo "<html><div></html>";
										echo " Client Name : ";
										echo $tempuname=$row['uname'];
										echo "<html></div></html>";										
										echo "<html><div></html>";
										echo " Client Phone : ";
										echo $tempnumber=$row['number'];																				
										echo "<html></div></html>";																						
										echo "<html><div></html>";
										echo " Event date : ";											
										echo $tempEdate=$row['Edate'];																					
										echo "<html></div></html>";
										echo "<html><div></html>";
										echo " Event City : ";											
										echo $tempEcity=$row['Ecity'];																					
										echo "<html></div></html>";
										echo "<html><div></html>";
										echo " Package Type : ";	
										echo $temppname=$row['PackageName'];																	
										echo "<html></div></html>";											
										echo "<html><div></html>";
										echo " Package Price : ";											
										echo $tempprice=$row['Price'];
										echo "<html></div></html>";
			}
		

			
				
	?>
	
	
	