<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");



if(isset($_POST['1st']))
{
			 $one1=$_POST['one1'];
			 $qryup="update wedding SET silver='$one1' where id=1";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
					
			} 	
			
			
			 $two1=$_POST['two1'];
			 $qryup="update wedding SET silver='$two1' where id=2";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
				
			} 
			 $three1=$_POST['three1'];
			 $qryup="update wedding SET silver='$three1' where id=3";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
					
			} 
			
			
			$four1=$_POST['four1'];
			 $qryup="update wedding SET silver='$four1' where id=4";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			 
			
			
			$five1=$_POST['five1'];
			 $qryup="update wedding SET silver='$five1' where id=5";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			
			$six1=$_POST['six1'];
			 $qryup="update wedding SET silver='$six1' where id=6";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			$seaven1=$_POST['seaven1'];
			 $qryup="update wedding SET silver='$seaven1' where id=7";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
				header("location:http://localhost/edmin/code/admin-wedding.php");	
			}
			
			} 
			
			if(isset($_POST['2nd']))
{
			 $one2=$_POST['one2'];
			 $qryup="update wedding SET gold='$one2' where id=1";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
					
			} 	
			
			
			 $two2=$_POST['two2'];
			 $qryup="update wedding SET gold='$two2' where id=2";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
				
			} 
			 $three2=$_POST['three2'];
			 $qryup="update wedding SET gold='$three2' where id=3";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else{
					
			} 
			
			
			$four2=$_POST['four2'];
			 $qryup="update wedding SET gold='$four2' where id=4";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			
			$five2=$_POST['five2'];
			 $qryup="update wedding SET gold='$five2' where id=5";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			
			$six2=$_POST['six2'];
			 $qryup="update wedding SET gold='$six2' where id=6";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			$seaven2=$_POST['seaven2'];
			 $qryup="update wedding SET gold='$seaven2' where id=7";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
				header("location:http://localhost/edmin/code/admin-wedding.php");	
			}
			
			}
			
			
			
			if(isset($_POST['3rd']))
			{
			$one3=$_POST['one3'];
			 $qryup="update wedding SET premium='$one3' where id=1";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			else { 
				
			}
				
			 $two3=$_POST['two3'];
			 $qryup="update wedding SET premium='$two3' where id=2";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}	else {
				echo mysqli_error();
				
			}
			
			
				$three3=$_POST['three3'];
			 $qryup="update wedding SET premium='$three3' where id=3";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
				
			
			$four3=$_POST['four3'];
			 $qryup="update wedding SET premium='$four3' where id=4";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			 
			
			
			$five3=$_POST['five3'];
			 $qryup="update wedding SET premium='$five3' where id=5";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			
			$six3=$_POST['six3'];
			 $qryup="update wedding SET premium='$six3' where id=6";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
					
			}
			$seaven3=$_POST['seaven3'];
			 $qryup="update wedding SET premium='$seaven3' where id=7";
			$log11=mysqli_query($c,$qryup);
			if($log11)
			{
			header("location:http://localhost/edmin/code/admin-wedding.php");	
			}
			
			}			
			}
mysqli_close($c);	
?>