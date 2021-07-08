<?php

if(isset($_POST["2nd"]))
{
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");


$qry="select gold from wedding where id=1";
$log1=mysqli_query($c,$qry);
if($row=mysqli_fetch_assoc($log1))
	{		
		  $one=$row['gold'];
		
	}

$qry="select gold from wedding where id=2";
$log1=mysqli_query($c,$qry);
if($row=mysqli_fetch_assoc($log1))
	{		
		 $two=$row['gold'];
		
	}	
	
	
	
else
{
echo mysqli_error($c);
}
}
mysqli_close($c);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin-Wedding</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
		<link type="text/css"href="edmin/code/style.css" rel="stylesheet">
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
		<link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">	
		<link href="preloader.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                 
  <!-- Start Pricing Table section -->
  <form method="POST">
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle">Packages</h2>
              <span class="tittle-line"></span>
              <p></p>
            </div> 
            <!-- service content -->
			 
            <div class="pricing-table-content" style="margin-left:116px";>
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                     
                      <span class="price-amount"><?php  echo $one;  ?></span>
                      <p><?php  echo $two;  ?></p>
                      <p>1 Candid Phtographer</p>
                      <p>2 Traditional Videographer</p>
                      <p>pre wedding shoot</p>
                      <p>2 Photo books</p>
                      <p>Wedding Montage</p>
				 <button data-text="UPDATE" class="button button-default" name="2nd" type="submit">
				
								<span>	Update </span>
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
                           
							
                        
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
	    <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
