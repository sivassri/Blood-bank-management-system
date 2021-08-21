<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$db="bbms";

$conn=mysqli_connect($server,$username,$password,$db);

?>
<html>
<head>
<style>
fieldset{
	height:300px; 
	width:300px;
	float:center;
	margin:0 300 0 300;
}
form
{

   font-family:"verdana";
   font-size:18px;
   padding:15px;
   color:black;
   background-color:rgba(255, 204, 153, 0.5);
   line-height:1.8;
   margin:0 300 0 300;
}
.linkk{
	margin: 0 0 0 630;
	font-family:"arial";
	font-size:20px;
	padding:15px;
	color:black;
	background-color:#E74C3C;
	text-decoration:none;
	border-radius:15px;
	
}
p{
	font-family:"arial";
	margin:0 100 0 570;
	font-size:20px;
	color:black;
	padding:15px;
	
}
div {
  font-family: verdana;
  font-size: 15px;
}

body{
	background-color:black;
}
.b{
    font-size:28px;
	line-height:1.8;
	font-style:bold;
	color:white;
	display: inline;
	font size:30px;
	font-family:"Luis sans";
}
img{
	display: inline; 
	width:40px;
	height:40px;
}
span.a{
	display: inline;
	color:white;
	width: 100px;
    height: 100px;
    padding: 15px;
 
}
.header
{ 
 float:center;
 text-align:center;
 font-family:verdana;
 font-size:10px;
 padding:15px;
 
}
#link
{
 padding:15px;
 font-size:18px;
 border-radius:15px;
}
a{
	text-decoration:none;
}
a:hover {
  color: black;
  background-color:gainsboro;
}
#about
{
	color:white;
	font-family:"arial";
	font-size:18px;
	text-align:center;
	line-height:1.8;
}
.leg{
    font-size:28px;
	line-height:1.8;
	font-style:bold;
	display: inline;
	font size:30px;
	font-family:"Luis sans";
}


</style>
<title> Homepage</title>
</head>
<body background="dark.jpg">


<span class="a"><img src="bloodline.jfif"></span>
<span class="a"><div class="b">Bloodline MIT<br></div></span>

<div class="header">
<a id="link" href="homepage.php">Home</a>
<a id="link" href="joinus.php">Join Us</a>
<a id="link" href="about.php">About</a>
<a id="link" href="instruction.php">Guidelines for donation</a>
<a id="link" href="checkavailability.php">Check Availability</a>
<a id="link" href="whocangiveblood.php">Who can give Blood?</a>
<a id="link" href="faq.php">FAQs</a>
<a id="link" href="importantlinks.php">Important Links</a>
<a id="link" href="requestblood.php">Request Blood</a>
</div><br><br>
<fieldset>
<legend><span class="leg">Check Availability</span></legend>
<form method="POST" action="checkavailability.php">
 <label for="Blood group">Blood Group:</label><br> 
<select id="Bloodgroup" name="bloodgroup"> 
<option value="A+ve">A+ve</option> 
<option value="A-ve">A-ve</option> 
<option value="B+ve">B+ve</option> 
<option value="B-ve">B-ve</option> 
<option value="AB+ve">AB+ve</option>
<option value="AB-ve">AB-ve</option> 
<option value="O+ve">O+ve</option> 
<option value="O-ve">O-ve</option> </select><br>
<br><label for="City">City:</label><br>
  <input type="text" name="city" value="city"><br>
  <br><input type="submit" name="submit" value="submit"></br></fieldset>
</form>

<?php

if($_POST['submit'])
{
	
$bg=$_POST['bloodgroup'];
$city=$_POST['city'];
$sql = "SELECT bloodgroup,city FROM join_us where bloodgroup='$bg' && city='$city'";
$result = $conn->query($sql);
$row = mysqli_num_rows($result); 
          
        
        echo "<p><font color=red>Number of donors found : $row </font></p>"; 
		   
}
$conn->close();
?>

<br>
<a class="linkk" href="requestblood.php">Request Blood</a></div>

</body>
</html>