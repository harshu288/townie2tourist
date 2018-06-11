
Conversation opened. 1 read message.

Skip to content
Using SIES GST Mail with screen readers
php 
Click here to enable desktop notifications for SIES GST Mail.   Learn more  Hide

Move to Inbox More 
8 of about 62
 
(no subject) 
Inbox
x 

JASMINE SHUKLA <jasmine.shukla15@siesgst.ac.in>
AttachmentsApr 16
to me 

5 Attachments
	
Click here to Reply or Forward
Using 1.08 GB
Program Policies
Powered by Google
Last account activity: 10 hours ago
Details


<!DOCTYPE html>

<html>
<head>
	<title>T2T/SignUp</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sign.css">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Alegreya|Architects+Daughter|Arvo|Baloo+Bhaijaan|Baloo+Tammudu|Bree+Serif|Courgette|Dancing+Script|Francois+One|Josefin+Sans|Pacifico|Permanent+Marker|Saira|Satisfy|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Aclonica|Anton|Arvo|Audiowide|Bubblegum+Sans|Carter+One|Caveat+Brush|Ceviche+One|Cookie|Courgette|Dosis|Exo+2|Fredoka+One|Fugaz+One|Gochi+Hand|Italianno|Itim|Kaushan+Script|Leckerli+One|Luckiest+Guy|Marck+Script|Old+Standard+TT|Oleo+Script|Orbitron|Paytone+One|Quantico|Russo+One|Ultra|Yanone+Kaffeesatz|Yesteryear|Modak" rel="stylesheet">
<script type="text/javascript">
  
function CheckPassword(inputtxt)   
{   
    var paswd = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;  
    if (inputtxt.value.match(paswd))   
    {   
        return true;  
    }  
    else  
    {   
        alert('Re-Enter the Password.It should contain atleast one number and one special character...!')  
        return false;  
    }  
} 

</script>




</head>
<body>
  <div class="body">
  </div>
    <div class="grad"></div>
    <div class="header">
      <div>TOWNIE <span>2</span> TOURIST</div>
    </div>
    <br>
    <div class="login">
      <form  name= "t2t" method="POST" action="demo.php">
        <input type="text" placeholder="First Name" name="first" REQUIRED pattern="[a-zA-Z][a-zA-Z]{2,}" title="Only letters allowed"><br><br>
        <input type="text" placeholder="Last Name" name="last" REQUIRED pattern="[a-zA-Z][a-zA-Z]{2,}" title="Only letters allowed"><br><br>
        <input type="text" placeholder="Username" name="user" REQUIRED  pattern="[a-zA-Z][a-z0-9]{2,10}" title="Only letters and atleast one number is to be included"><br>
        <input type="password" placeholder="Password" name="password" REQUIRED><br>
        <input type="password" placeholder="Confirm Password" name="cpassword" REQUIRED><br>
        <input type="date" placeholder="MM/DD/YYYY" name="dt" REQUIRED><br>
       <!--  Gender<br><input type="radiobutton" name="RD" value="Male">Male<br><input type="radiobutton" name="RD" value="Male">Female<br><input type="radiobutton" name="RD" value="Male">Other<br> -->
        <select name="dropdown" placeholder="City" value="select">
          <option selected="hidden">Select your City</option>
          <option>Mumbai</option>
          <option>Thane</option>
          <option>Delhi</option>
          <option>Kolkata</option>
          <option>Chennai</option>
          <option>Jaipur</option>
          <option>Bhopal</option>
          <option>Chandigarh</option>
        </select><br><br>
        <input type="number" placeholder="Contact No." name="contact" REQUIRED pattern="[0-9][0-9]{9}" title="Enter 10 numbers only"><br><br>
        <input type="email"  placeholder="E-mail" name="email" REQUIRED><br><br>
        <input type="textarea" placeholder="Address" name="address" row="3" REQUIRED><br><br>
        <center><button type="submit" class="btn btn-pri" name="submit" onclick="CheckPassword(document.t2t.password)">Sign me up!</button></center>
      </form>  
    </div>
  <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

  
</body>
</html>
