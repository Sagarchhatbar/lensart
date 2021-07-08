
<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
						<li style="margin-left:900px"><a href="http://localhost/lensart_login/adminlogin.php" >Logout</a></li>
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



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					

						
					
						
					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								<h3>Task Management Tool</h3>
								<h4>delete request after making changes in it.</h4>
							</div>
							<div class="module-option clearfix">
								<div class="pull-left">
									Filter : &nbsp;
									<div class="btn-group">
										<button class="btn">All</button>
										<button class="btn dropdown-toggle" data-toggle="dropdown">
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">All</a></li>
											<li><a href="#">In Progress</a></li>
											<li><a href="#">Done</a></li>
											<li class="divider"></li>
											<li><a href="#">New task</a></li>
											<li><a href="#">Overdue Task</a></li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="module-body table">								

								
											
			<form method="POST" action="ex.php">																			

<?php


	
				if(isset($_SESSION['uemail']))
				{
					echo "welcome Admin  ".$_SESSION['uemail'];
				}
				  else
				{
					header("location:http://localhost/Login_v5/adminlogin.php");
				} 
				
				
				
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");


$qry="select * from bookevent";
$log1=mysqli_query($c,$qry);
$i=1;
		while($row = mysqli_fetch_array($log1))
        {			
		 $tempEcity=$row['Ecity'];
		 $tempreq=$row['req'];
		 $tempEdate=$row['Edate'];
		
		 $tempuname=$row['uname'];
		 $tempnumber=$row['number'];
		 $temppname=$row['PackageName'];
		 $tempprice=$row['Price'];	
		 $tempctimedate=$row['Ctimedate'];	
		 $id=$row['id'];
		 $_SESSION['id']=$id;
		 $_SESSION['bnum']=$i;
		 $tempemail=$row['email'];
		 $_SESSION['em']=$tempemail;
				
							echo "<html>
							<form method='POST' action='ex.php'>
							<table class='table table-message'>
									<tbody>
									
										<tr class='heading'>
											<td class='cell-icon'></td>
											
											<td class='cell-title'>Event</td>
											
											<td class='cell-status hidden-phone hidden-tablet'>Accept or deny
										</td>
											<td class='cell-time align-right'>Time & Date</td>
											<td class='cell-time align-right'>status</td>											
										</tr>
										<tr class='task'>
											<td class='cell-icon'><i class='icon-checker high'></i></td>
											<td class='cell-title'> </html>";
										?>
										<input type="text" value="<?php echo $row['id']; ?>" name='R' >
										
								<?php
										
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
										echo "<html><div></html>";
										echo " Client email : ";
										echo $_SESSION['em'];
										echo "<html></div></html>";		
										
										echo "<html></td></html>";

										echo " <html> <td class='cell-status hidden-phone hidden-tablet'></html>";
										echo " <html><b class='due'>";					

							echo "<input class='due' name='accept' type='submit' value='Accept'>
							</input></b>							
							<b class='due'>
						    
							<input class='due' name='deny' type='submit' value='Deny'>
							</input></b>
							
							<b class='due'>						    
							<input class='due' name='delete' type='submit' value='Delete'>
							</input></b>
							</td>
							<td class='cell-time align-right'>";
							echo $tempctimedate;
							echo "</td></html>
							<td class='cell-time align-right'>";
							if($tempreq==1)
							{
				
							
require_once __DIR__ . '/vendor/autoload.php';

		 $tempEcity=$row['Ecity'];
		 $tempreq=$row['req'];
		 $tempEdate=$row['Edate'];
		 $tempuname=$row['uname'];
		 $tempnumber=$row['number'];
		 $temppname=$row['PackageName'];
		 $tempprice=$row['Price'];	
		 $tempctimedate=$row['Ctimedate'];	
		 $id=$row['id'];
		 $tempemail=$row['email'];

$mpdf = new \Mpdf\Mpdf();


$data = '';
$data = '<img src="lablack.png">';
              $data .= '<centre><h1>BILL OF BOOKING A PHOTOSHOOT</centre>';
              $data .= '
              <br><br><table border="1">
              <tr>
                <th>Full Name</th>
                <td> '.$tempuname.'</td>
              </tr>
              <tr>
                <th>Email</th>
                <td> '.$tempemail.'</td>
              </tr>
              <tr>
                <th>Number</th>
                <td> '.$tempnumber.'</td>
              </tr>
              <tr>
                <th>City</th>
                <td> '.$tempEcity.'</td>
              </tr>
              <tr>
                <th>Date</th>
                <td> '.$tempEdate.'</td>
              </tr>
              <tr>
                <th>Package Name</th>
                <td> '.$temppname.'</td>
              </tr>
              <tr>
                <th>Package Price</th>
                <td>'.$tempprice.'</td>
              </tr>
              <tr>
                <th>PAYMENT MODE</th>
                <td>CASH</td>
              </tr>
              <tr>
              </tr>
              </table>';
              $data .= '<p>Have a Great Day!</p>';

$mpdf->writeHTML($data);

$content=$mpdf->output('','S');
require './PHPMailerAutoload.php';

                  $mail = new PHPMailer;                   
                  $mail->isSMTP();                                      
                  $mail->Host = 'smtp.gmail.com';  
                  $mail->SMTPAuth = true;                              
                  $mail->Username = 'lensartstudio1@gmail.com';                 
                  $mail->Password = 'hsbrothers';                          
                  $mail->SMTPSecure = 'ssl';                           
                  $mail->Port = 465;                                   
                  //$mail->SMTPDebug = 3;
                  $mail->setFrom('lensartstudio1@gmail.com', 'lensart');
                  $mail->addAddress($tempemail,$tempemail);     
                  $mail->isHTML(true);                                  
                  $mail->Subject = 'Bill of yor booking';
                  $mail->Body    = "Hello! here is your bill of booking PHOTOSHOOT";
                  $mail->addStringAttachment($content,'Bill_payment.pdf');
                
                if(!$mail->send()) 
                {
                  echo "<script>alert('Email not sent');</script>";
                }
                else 
                {
                echo "<script>alert('Email sent on your Email ID please check it out');</script>";
                } 	
					echo "<script>alert('Booking successfull!!.. Msg Send...');</script>";
				  

				
							 
							echo  "Approved";
							
							}
							if($tempreq==0){
								echo  "Canceled";
							}
							if($tempreq==2){
								echo"not responded yet";
							}
							echo "</td></tr></html>";
							$i++;			
							?>
													</tbody>
								</table>
	    
</form>     
							<?php
		}
} 		
?>	
		           
						

							</div>
							<div class="module-foot">
							</div>
						</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">Admin - LensArt </b>
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script type="text/javascript">
	/*	$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);
		} ); */
	</script>
	
</body>
</html>