<?php
session_start();
$con=mysqli_connect('localhost','root','','test');
$email=$_POST['email'];
	
	$_SESSION['email']=$email;
					$_SESSION["email"] = $email;
					$selectquery = mysqli_query($con,"insert into user values('','$email','');");
					//$count = mysqli_num_rows($selectquery);
					//$row =  mysqli_fetch_array($selectquery);
					
								if($selectquery != NULL)
								{
								
											$otp = mt_rand(10000, 99999);
											try 
											{
												setcookie('otp' , $otp);
												echo "OTP Successfully send";
												mysqli_query($con,"update user set otp='$otp' where email='$email'");
											} 
											catch (Exception $email) 
											{
											die('Error: ' . $email->getMessage());
											}

								
										require './PHPMailerAutoload.php';
						   
									$mail = new PHPMailer;                   
									$mail->isSMTP();                                      
									$mail->Host = 'smtp.gmail.com';  
									$mail->SMTPAuth = true;                              
									$mail->Username = 'LensArtStudio1@gmail.com';                 
									$mail->Password = 'hsbrothers';                          
									$mail->SMTPSecure = 'ssl';                           
									$mail->Port = 465;                                   
									//$mail->SMTPDebug = 3;
									$mail->setFrom('LensArtStudio1@gmail.com', 'lensart');
									$mail->addAddress($email,$email);     
									$mail->isHTML(true);                                  
									$mail->Subject = 'Welcome to lensart';
									$mail->Body    = "Hello! This is your One Time Password use this OTP and change your Password : " . $otp;
								if(!$mail->send()) 
								{
									echo 'Message could not be sent.';
									echo 'Mailer Error: ' . $mail->ErrorInfo;
								}
								else 
								{
								echo "<script>alert('Email sent on your Email ID please check it out');</script>";
								}
										
								echo "yes";		
		}

	
	
else{
	echo "no";
}


?>