<?php
$server="localhost";
$user="id6123248_harshu";
$pass="geeta@786";
$dbname="id6123248_tt";
$conn=mysqli_connect($server,$user,$pass,$dbname);
//if(!$conn)
//{
  //die("No connection established".mysqli_error($conn));
//}
//else
//{
  //echo "<center>SUCCESS</center>";

//}
// $sql = "CREATE DATABASE BOOKING";
$count;
$source = $_POST['down'];
$dest   = $_POST['drop'];
$date   = $_POST['date'];
$people = $_POST['nop'];
$flight = $_POST['Flights'];
$user   = "SELECT Username from custdetails where id=mysql_insert_id()";
//if(($source=="Goa,IN-Dabolim Airport(GOI)")&&($dest=="New Delhi,IN-Indira Gandhi Airport(DEL)")&&($date=="11/05/2017")&&($count<=2)&&($flight="Go Air(G8384) RATE:3,045/- per person TIME-18:30"))
//{
	$sql = "INSERT INTO Book(Source , Destination , DateOfJourney , NoOfPeople , FlightDetails , Username) values('$source' , '$dest' , '$date' , '$people' , '$flight' , '$user')";
//	$count++;
//}
//else if(($source=="Goa,IN-Dabolim Airport(GOI)")&&($dest=="New Delhi,IN-Indira Gandhi Airport(DEL)")&&($date=="11/05/2017")&&($count>2)&&($flight=="Go Air(G8384) RATE:3,045/- per person TIME-18:30"))
//{
//  echo "The flight is full and cannot be booked" ;
//}
//else
//{
//   	$sql = "INSERT INTO Book(Source , Destination , DateOfJourney , NoOfPeople , FlightDetails , Username) values('$source' , '$dest' , '$date' , '$people' , '$flight' , '$user')";	
//}

 
if(mysqli_query($conn , $sql))
{
  echo '<center>BOOKED SUCCESSFULLY<br><a href="login.html">HOME</a><center>';
}
else
{
    header('location: login.html');
  echo "OOPS...TRY AGAIN!";
}
?>
