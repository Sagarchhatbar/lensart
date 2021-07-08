<?php
session_start();
$con=mysqli_connect('localhost','root','','lensart');
$otp=$_POST['otp'];
					 $email=$_SESSION["email"];
					$res = mysqli_query($con,"select * from otp_verification where otp='{$otp}' and email='{$email}'");
				$count=mysqli_num_rows($res);
				if ($count>0)
				{
					echo "yes";
				}
				else 
				{

				 	echo "no";
				} 
?>