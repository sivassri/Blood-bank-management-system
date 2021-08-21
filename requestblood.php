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
form
{
   font-family:"verdana";
   font-size:18px;
   padding:15px;
   color:black;
   background-color:rgba(255, 204, 153, 0.5);
   align:"center"
   line-height:1.8;
   margin:0 670 0 50;
}
p{
	font-family:"arial";
	
	margin:0 100 0 700;
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
#bl{
	display: inline; 
	width:40px;
	height:40px;
}
#don{
	display: inline; 
	float:right;
	padding:15px;
	margin-top:200px;
	margin-right:90px;
	width:446px;
	height:250px;
	border-radius:100px;
}

span.a{
	display: inline;
	color:white;
	width: 100px;
    height: 100px;
    padding: 15px;
 
}
.leg{
     font-size:28px;
	line-height:1.8;
	font-style:bold;
	display: inline;
	font size:30px;
	font-family:"Luis sans";
}

.header
{ 
 float:center;
 text-align:center;
 font-family:"verdana";
 font-size:20px;
 padding:15px;
 
}
#link
{
 padding:15px;
 border-radius:15px;
 font-size:17px;
 
}
a{
	text-decoration:none;
}
a:hover {
  color: black;
  background-color:gainsboro;
}
</style>
<title> Homepage</title>
</head>
<body background="dark.jpg">


<span class="a"><img id ="bl" src="bloodline.jfif"></span>
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
<a id="link" href="requestblood.php">Request Blood</a></div><br><br>
<img id="don" src="donor.jfif"></img>
<form method="GET" action="">
  
  <fieldset style="width:600px">
  <legend><span class="leg">Request Blood</span></legend>
  <h3>Personal Details</h3>
  <label for="name">Name</label><br>
  <input type="text" id="lname" name="name" ><br><br>
  
  <div>
    Gender:
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
  </div><br>
  <label for="Blood group">Blood Group:</label><br>
 <select id="Bloodgroup" name="bloodgroup">
    <option value="A+ve">A+ve</option>
    <option value="A-ve">A-ve</option>
    <option value="B+ve">B+ve</option>
    <option value="B-ve">B-ve</option>
    <option value="AB+ve">AB+ve</option>
    <option value="AB-ve">AB-ve</option>
    <option value="O+ve">O+ve</option>
    <option value="O-ve">O-ve</option>
    </select><br><br>
  
  <label for="dob">D.O.B:</label><br>
  <input type="date" id="dob" name="dob" value="dd/mm/yyyy"><br>  <br>
 <label for="mob">Mobile Number:</label><br>
  <input type="tel" name="mob"><br><br>

  <label for="mailid">Email:</label><br>
  <input type="email" id="mailid" name="mailid"  size="40"><br> <br> 
  
  <h3>Hospital Details</h3>
  <label for="hos">Hospital Name:</label><br>
  <input type="text" name="hos"><br><br>

  <label for="add">Hospital Address:</label><br>
  <textarea name="address" rows="4" cols="40" >
  </textarea><br><br>
   
  <label for="City">City:</label><br>
  <input type="text" name="city"><br><br>
   
   <label for="datewithin">Date within which blood is needed:</label><br>
  <input type="date" name="datewithin"><br>
  
  <br><input type="submit" name="submit" value="submit"></br>
</fieldset>
</form>


<?php
if($_GET['submit'])
{
$name=$_GET['name'];
$gender=$_GET['gender'];
$bloodgroup=$_GET['bloodgroup'];
$dob=$_GET['dob'];
$mob=$_GET['mob'];
$mailid=$_GET['mailid'];
$hos=$_GET['hos'];
$address=$_GET['address'];
$city=$_GET['city'];
$datewithin=$_GET['datewithin'];

  if($name!="" && $gender!="" && $bloodgroup!="" && $dob!="" && $mob!="" && $mailid!="" && $hos!="" && $address!="" && $city!="" && $datewithin!="")
   {

   $query=" Insert into requestblood values('$name','$gender','$bloodgroup','$dob','$mailid','$hos','$address','$city','$mob','$datewithin')";
   $data=mysqli_query($conn,$query);

     if($data)
	{
 	 echo "<script>alert('Successfully Requested.')</script>";
	}
    }
else 
 {
   echo "<script>alert('All fields are required!')</script>";
 }
}

?>



