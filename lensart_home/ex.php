<?php
session_start();
ob_start();		
if(isset($_POST["2nd"]))
{
	$_SESSION['PackagePrice']="100000 INR ";
	$_SESSION['PackageType']="wedding - second level";
	header("location:http://localhost/lensart_signup/eventform.php");

}
if(isset($_POST["3rd"]))
{
	$_SESSION['PackagePrice']="200000 INR ";
	$_SESSION['PackageType']="wedding - third level";
	header("location:http://localhost/lensart_signup/eventform.php");
}
if(isset($_POST["1st"]))
{
	$_SESSION['PackagePrice']="wedding -70000 INR ";
	$_SESSION['PackageType']="first level";
	header("location:http://localhost/lensart_signup/eventform.php");
}
	if(isset($_POST["2nden"]))
{
	$_SESSION['PackagePrice']="20000 INR";
	$_SESSION['PackageType']="Engagement -second level";
	header("location:http://localhost/lensart_signup/eventform.php");

}
if(isset($_POST["3rden"]))
{
	$_SESSION['PackagePrice']="20,000 INR";
	$_SESSION['PackageType']="Engagement -third level";
	header("location:http://localhost/lensart_signup/eventform.php");
}
if(isset($_POST["1sten"]))
{
	$_SESSION['PackagePrice']="10,000 INR ";
	$_SESSION['PackageType']="Engagement - first level";
	header("location:http://localhost/lensart_signup/eventform.php");
}

?>