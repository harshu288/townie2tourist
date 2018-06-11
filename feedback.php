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
 $mail=$_POST['email'];
 $rate=$_POST['rate'];
 $sug=$_POST['sugg'];
 $sql = "INSERT INTO fb(email,rating,sugg) values('$mail' , '$rate' , '$sug')";
 if(mysqli_query($conn , $sql))
{
  echo '<h2><center>Thankyou for your valuable feedback!!</center></h2><br>';
}
else
{
  echo "PROBLEM!!";
}
 
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>T2T/Link</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type=”text/css”>
	body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
h2 {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</head>
<body bgcolor="#D3D3D3">

</body>
</html>