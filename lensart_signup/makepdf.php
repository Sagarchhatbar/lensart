<?php
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
$data = '<img src="assets/images/logo1.png">';
              $data .= '<centre><h1>BILL OF BOOKING A PHOTOSHOOT</centre>';
              $data .= '<table border="1">
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
                  $mail->addAddress($useremail,$useremail);     
                  $mail->isHTML(true);                                  
                  $mail->Subject = 'Bill of yor booking';
                  $mail->Body    = "Hello! here is your bill of booking have a safe journey";
                  $mail->addStringAttachment($content,'Bill.pdf');
                
                if(!$mail->send()) 
                {
                  echo "<script>alert('Email not sent');</script>";
                }
                else 
                {
                echo "<script>alert('Email sent on your Email ID please check it out');</script>";
                } 	
					echo "<script>alert('Booking successfull!!.. Msg Send...');</script>";
				  }
				  else{
					echo "<script>alert('Out Of Stock ');</script>";
				  }
				}
				else 
				{
				echo "<script>alert('Something went wrong. Please try again');</script>";
				}

			}
			 
			 

?>