<?php
$server="localhost";
$user="id6123248_harshu";
$pass="geeta@786";
$dbname="id6123248_tt";
$conn=mysqli_connect($server,$user,$pass,$dbname);
/* if(!$conn)
 {
   die("No connection established".mysqli_error($conn));
 }
 else
 {
   echo "SUCCESS";
 }*/
 //$query = "CREATE TABLE CustDetails(FirstName varchar(15) , LastName varchar(15) , Username varchar(10) , Password varchar(15) , ConfirmPassword varchar(15) , DateOfBirth varchar(10) , City varchar(10) , ContactNo varchar(10) , Email varchar(30) , Address varchar(40))";

if (isset($_POST['first'])) 
{
$first = $_POST['first'];}
if (isset($_POST['last'])) 
{
$last  = $_POST['last'];}
if (isset($_POST['user'])) 
{
$user  = $_POST['user'];}
if (isset($_POST['password'])) 
{
$pass  = $_POST['password'];}
if (isset($_POST['cpassword'])) 
{
$cpass = $_POST['cpassword'];}
if (isset($_POST['dt'])) 
{
$date  = $_POST['dt'];}
if (isset($_POST['dropdown'])) 
{
$city  = $_POST['dropdown'];}
if (isset($_POST['contact'])) 
{
$cont  = $_POST['contact'];}
if (isset($_POST['email'])) 
{
$email = $_POST['email'];}
if (isset($_POST['address'])) 
{
$add   = $_POST['address'];}
$sql = "INSERT INTO custdetails(FirstName , LastName , Username , Password , ConfirmPassword , DateOfBirth , City , ContactNo , Email , Address) values('$first' , '$last' , '$user' , '$pass' , '$cpass' , '$date' , '$city' , '$cont' , '$email' , '$add')";

if(mysqli_query($conn , $sql))
{
 // echo '<center>You have successfully Registered<br>';
  $_SESSION['username'] = $user;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.html');
  	echo 'alert("You have successfully Registered")';
}
else
{
  echo "NOT INSERTED";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>T2T/Link</title>
</head>
<body bgcolor="#D3D3D3">

</body>
</html>