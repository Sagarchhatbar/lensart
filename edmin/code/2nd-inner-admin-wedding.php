<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");


$qry="select * from wedding where id=1";
$log1=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log1))
	{		
		  $one2=$row['gold'];
		
	}

$qry="select * from wedding where id=2";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $two2=$row['gold'];
		
	}	

$qry="select * from wedding where id=3";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $three2=$row['gold'];
		
	}	
	
	
$qry="select * from wedding where id=4";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $four2=$row['gold'];
		
	}	



$qry="select * from wedding where id=5";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $five2=$row['gold'];
		
	}	




$qry="select * from wedding where id=6";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $six2=$row['gold'];
		
	}	


$qry="select * from wedding where id=7";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $seaven2=$row['gold'];
		
	}		
	

}
mysqli_close($c);

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
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li style="margin-left:900px"><a href="adminlogout.php" >Logout</a></li>
					</ul>

					
					<ul class="nav pull-right">
						<li class="dropdown">
							
							
						</li>
						
						
						<li class="nav-user dropdown">
							
							
								
								
							
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                 
  <!-- Start Pricing Table section -->
 <form method="POST"  action="ex3.php"> 
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
			 
            <div class="pricing-table-content" style="margin-left:421px;	 margin-top: 0px";>
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                     
                      <input type="text" name="one2" value="<?php  echo $one2;  ?>"
					style="height: 30px;
						border-radius: 5px;" > 
                      
					   <p><input type="text" name="two2" value="<?php  echo $two2;  ?>" placeholder="<?php  echo $two2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>
					 <p><input type="text" name="three2" value="<?php  echo $three2;  ?>" placeholder="<?php  echo $three2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>
                    <p><input type="text" name="four2" value="<?php  echo $four2;  ?>" placeholder="<?php  echo $four2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>
<p><input type="text" name="five2" value="<?php  echo $five2;  ?>" placeholder="<?php  echo $five2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>
<p><input type="text" name="six2" value="<?php  echo $six2;  ?>" placeholder="<?php  echo $six2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>

<p><input type="text" name="seaven2" value="<?php  echo $seaven2;  ?>" placeholder="<?php  echo $seaven2;  ?>" style="height: 30px;
border-radius: 5px;">  </p>
				 <button data-text="UPDATE" class="button button-default" name="2ndwed" type="submit">
				
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
