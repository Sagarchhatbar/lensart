<?php
session_start();
ob_start();			
if(isset($_POST["2ndwed"]))
{
	header("location:http://localhost/edmin/code/2nd-inner-admin-wedding.php");
}
if(isset($_POST["3rdwed"]))
{
	header("location:http://localhost/edmin/code/3rd-inner-admin-wedding.php");
}
if(isset($_POST["1stwed"]))
{
	header("location:http://localhost/edmin/code/1st-inner-admin-wedding.php");
}
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c,"Lensart");
$qry="select * from wedding where id=1";
$log1=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log1))
	{		
		$one3=$row['premium'];	
	}
$qry="select * from wedding where id=2";
$log2=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log2))
	{		
		 $two3=$row['premium'];	
	}	
$qry="select * from wedding where id=3";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $three3=$row['premium'];	
	}	
$qry="select * from wedding where id=4";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $four3=$row['premium'];	
	}	
$qry="select * from wedding where id=5";
$log2=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log2))
	{		
		 $five3=$row['premium'];
		
	}	
$qry="select * from wedding where id=6";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $six3=$row['premium'];
		
	}	


$qry="select * from wedding where id=7";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $seaven3=$row['premium'];
		
	}		
	
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
	$qry="select * from wedding where id=1";
$log1=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log1))
	{		
		  $one1=$row['silver'];	
	}
$qry="select * from wedding where id=2";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		$two1=$row['silver'];	
	}
$qry="select * from wedding where id=3";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $three1=$row['silver'];		
	}		
$qry="select * from wedding where id=4";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $four1=$row['silver'];	
	}	
$qry="select * from wedding where id=5";
$log2=mysqli_query($c,$qry);
while($row=mysqli_fetch_assoc($log2))
	{		
		 $five1=$row['silver'];	
	}	
$qry="select * from wedding where id=6";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $six1=$row['silver'];
	}	
$qry="select * from wedding where id=7";
$log2=mysqli_query($c,$qry);

while($row=mysqli_fetch_assoc($log2))
	{		
		 $seaven1=$row['silver'];	
}
	/*
	if(isset($_POST['imgupd']))
	{
		$image= addcslashes(file_get_contents($_FILES['upd']['tmp_name']));
		
			 $qp1="update wedding SET pname='$image' where id=1";
			$l=mysqli_query($c,$qp1);
			if($l)
			{
				echo "su";	
			}
			else{
				echo "fail";		
			} 		
	}
	if(isset($_POST['imgin']))
	{
		 $image= addslashes(file_get_contents($_FILES[$_POST['upd1']]['tmp_name']));
			$qp="insert into 'wedding' (pname) values('$image') where id=1";
			$lo=mysqli_query($c,$qp);
			if($lo)
			{
			echo "su";	
			}
			else
			{
				echo "fail";		
			}	
	} 
	*/
	//-----------------------imgupd---------------------------
	if(isset($_POST['imgupd'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{
move_uploaded_file($_FILES["up"]["tmp_name"], "upload/" . $_FILES["up"]["name"]);
$a=$_FILES["up"]["name"];
$ins="update photos SET wedding=('$a') where id=1";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd2---------------------------
	if(isset($_POST['imgupd2'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up2"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up2"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{
move_uploaded_file($_FILES["up2"]["tmp_name"], "upload/" . $_FILES["up2"]["name"]);
$a=$_FILES["up2"]["name"];
$ins="update photos SET wedding=('$a') where id=3";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd1---------------------------
	if(isset($_POST['imgupd1'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up1"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up1"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up1"]["tmp_name"], "upload/" . $_FILES["up1"]["name"]);
$a=$_FILES["up1"]["name"];
$ins="update photos SET wedding=('$a') where id=2";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}

//-----------------------imgupd3---------------------------
	
	if(isset($_POST['imgupd3'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up3"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up3"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up3"]["tmp_name"], "upload/" . $_FILES["up3"]["name"]);
$a=$_FILES["up3"]["name"];
$ins="update photos SET wedding=('$a') where id=4";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd4---------------------------
	if(isset($_POST['imgupd4'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up4"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up4"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up4"]["tmp_name"], "upload/" . $_FILES["up4"]["name"]);
$a=$_FILES["up4"]["name"];
$ins="update photos SET wedding=('$a') where id=5";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd5---------------------------
	if(isset($_POST['imgupd5'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up5"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up5"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up5"]["tmp_name"], "upload/" . $_FILES["up5"]["name"]);
$a=$_FILES["up5"]["name"];
$ins="update photos SET wedding=('$a') where id=6";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd7--------------------------
	if(isset($_POST['imgupd7'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up7"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up7"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	

move_uploaded_file($_FILES["up7"]["tmp_name"], "upload/" . $_FILES["up7"]["name"]);
$a=$_FILES["up7"]["name"];
$ins="update photos SET wedding=('$a') where id=7";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd8---------------------------
	if(isset($_POST['imgupd8'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up8"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up8"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up8"]["tmp_name"], "upload/" . $_FILES["up8"]["name"]);
$a=$_FILES["up8"]["name"];
$ins="update photos SET wedding=('$a') where id=8";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd9---------------------------
	if(isset($_POST['imgupd9'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up9"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up9"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up9"]["tmp_name"], "upload/" . $_FILES["up9"]["name"]);
$a=$_FILES["up9"]["name"];
$ins="update photos SET wedding=('$a') where id=9";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd10---------------------------
	if(isset($_POST['imgupd10'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up10"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up10"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up10"]["tmp_name"], "upload/" . $_FILES["up10"]["name"]);
$a=$_FILES["up10"]["name"];
$ins="update photos SET wedding=('$a') where id=10";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
 //-----------------------imgupd11---------------------------
	if(isset($_POST['imgupd11'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up11"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up11"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up11"]["tmp_name"], "upload/" . $_FILES["up11"]["name"]);
$a=$_FILES["up11"]["name"];
$ins="update photos SET wedding=('$a') where id=11";
//echo "file Size is: " . ($_FILES["up11"]["size"] / 1024) . " kB<br>";
/*if(($_FILES["up11"]["size"] / 1024)>2000)
	{
		echo "<br><script>alert ('Please,image must be smaller than 2 MB'); </script><br>";
		//header("location:admin-wedding.php");
	} */
if(mysqli_query($c,$ins))
{
	
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
	//header("location:admin-wedding.php");
	}


else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
}
//-----------------------imgupd12---------------------------
	if(isset($_POST['imgupd12'])){
$ext = array("png","jpeg","jpg");
$temp = explode(".", $_FILES["up12"]["name"]);
$extension = end($temp);
if(in_array($extension, $ext))
{
if (file_exists("upload/" . $_FILES["up12"]["name"]))
{
echo "<br><script>alert ('File already exists!!!'); </script><br>";
}
else
{	
move_uploaded_file($_FILES["up12"]["tmp_name"], "upload/" . $_FILES["up12"]["name"]);
$a=$_FILES["up12"]["name"];
$ins="update photos SET wedding=('$a') where id=12";
if(mysqli_query($c,$ins))
{
	echo "<br><script>alert ('File is uploaded successfully'); </script><br>";
/* echo "<br><br><b>File is uploaded successfully</b> "; */
}
else
{
echo mysqli_error();
}
}
}
else
{
	echo "<br><script>alert ('Invalid file!!! Please Select Valid File'); </script><br>";
}	
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
		
       
<!-- Start Portfolio section -->
    <div class="container">
<form method="POST"  enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
         
            <div class="title-area">
              <h2 class="tittle">Wedding Sample Images</h2>
              <span class="tittle-line"></span>
            </div>
			
       <!--    /wp-content/uploads/flamingo.jpg
	   <a class="fancybox" href="images/photography/DSC_0306.JPG" data-fancybox-group="gallery" title="Photography">
		 <img class="picture" src="C://xampp/htdocs/MarkUps-Rex/Rex/assets/images/beach-bride-clouds-931796.jpg" /> </a> 
         -->
	<table  border='5px'>
	<tr>
	 <td>
		  <div class="">
		 <button type="submit" name="imgupd" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
	 <td>
  <div class="">
		 <button type="submit" name="imgupd1" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up1" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 <td>
  <div class="">
		 <button type="submit" name="imgupd2" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up2" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 </tr>
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		echo "<tr>";
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=1");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	 
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		
		 
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=2");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=3");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		echo "</tr>";
		//echo "</table>";
	}
	?>
	<tr>
	 <td>
		  <div class="">
		 <button type="submit" name="imgupd3" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up3" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
	 <td>
  <div class="">
		 <button type="submit" name="imgupd4" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up4" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 <td>
  <div class="">
		 <button type="submit" name="imgupd5" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up5" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 </tr>
		 
		 
		 
		 
		 
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		echo "<tr>";
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=4");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	 
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		
		 
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=5");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=6");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		echo "</tr>";
		
	}
		?>
		
		<tr>
	 <td>
		  <div class="">
		 <button type="submit" name="imgupd7" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up7" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
	 <td>
  <div class="">
		 <button type="submit" name="imgupd8" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up8" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 <td>
  <div class="">
		 <button type="submit" name="imgupd9" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up9" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 </tr>
		
		
		
	<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		echo "<tr>";
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=7");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	 
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		
		 
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=8");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=9");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		echo "</tr>";
		
	}
		?>
		<tr>
	 <td>
		  <div class="">
		 <button type="submit" name="imgupd10" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up10" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
	 <td>
  <div class="">
		 <button type="submit" name="imgupd11" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up11" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 <td>
  <div class="">
		 <button type="submit" name="imgupd12" ><span> UPDATE </span></button> 
		 <p> <input type="file" name="up12" value="update">  </p>
			 <br>
			 <!--	 <button type="submit" name="imgdis"  ><span> Display(test) </span></button>   
 		 --></div>
		 </td>
		 </tr>
		<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		echo "<tr>";
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=10");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	 
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		
		 
		 <?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=11");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		
	}
		?>
		<?php
			
			$c=mysqli_connect("localhost","root","");
	if($c)
	{
	mysqli_select_db($c,"Lensart");	
		
		
	
		echo "<td>";
	//if(isset($_POST['imgdis'])){	
	$res=("select (wedding)from photos where id=12");
	$res1=mysqli_query($c,$res);
	while($row = mysqli_fetch_array($res1))	
	{
	
	?>
	<img width='100px'  src="upload/<?php echo $row['wedding']; ?> "/>
	<?php
	  //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pname'] ).'"/>';
		
	}
	//}
	
		echo "</td>";	
		echo "</tr>";
		echo "</table>";
	}
		?>
	    </div>
      </div>
  </div>
  </form>
  <!-- Start Pricing Table section -->
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
			 <form method="POST">
            <div class="pricing-table-content" style="margin-left:116px";>
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
				 <button data-text="UPDATE" class="button button-default" name="2ndwed" type="submit">
				
								<span>	Update </span>
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
                    <button data-text="UPDATE" class="button button-default" name="1stwed" type="submit">
				
								<span>	Update </span>
							</button>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                    
                      <span class="price-amount"><?php echo $one3; ?></span>
                      <p><?php echo $two3; ?></p>
                      <p><?php echo $three3; ?></p>
                      <p><?php echo $four3; ?></p>
                      <p><?php echo $five3; ?></p>
                      <p><?php echo $six3; ?></p>
                      <p><?php echo $seaven3; ?></p>
                      <button data-text="UPDATE" class="button button-default" name="3rdwed" type="submit">
				
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
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
							</div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div> 
            </div> 
            <!--/.container-->
        </div>
	    <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Admin Lensart</b>
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
</html>