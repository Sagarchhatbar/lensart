<html>
<body>



<?php
	session_start();
	ob_start();
	$c = mysqli_connect("localhost","root","");
		if($c)  {
				mysqli_select_db($c,"Lensart");
				
				$tmid=$_SESSION['id'];
				$log = "select * from bookevent";
				
				
				if(isset($_POST['accept'])) 
				{
					
					$b=$_POST['R'];
					$cnt=$_SESSION['bnum'];
					$log1 = mysqli_query($c,$log);					
					while($row = mysqli_fetch_array($log1)) 
					{			
						
						$qry = "update bookevent set req=1 where id='".$b."'";				
						$lo = mysqli_query($c,$qry);
						header("location:task.php");
					}	
				}
					
				if(isset($_POST['deny'])) 
				{	$b=$_POST['R'];
					$cnt=$_SESSION['bnum'];
					$log2 = mysqli_query($c,$log);
					while($row = mysqli_fetch_array($log2)) 
					{
						
						$qry2 = "update bookevent set req=0 where id='".$b."'";
						$lo2 = mysqli_query($c,$qry2);
						header("location:task.php");
					}	
				}
				if(isset($_POST['delete'])) 
				{	$b=$_POST['R'];
					$cnt=$_SESSION['bnum'];
					$log3 = mysqli_query($c,$log);
					while($row = mysqli_fetch_array($log3)) 
					{
							$qry3 = "delete from bookevent where id='".$b."'";
							$lo3= mysqli_query($c,$qry3);	
							header("location:task.php");
					}
				}
				
		}		
	
	else
		echo "error";
	
?>

</body>
</html>