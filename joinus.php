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
   background-color:rgba(255, 204, 153, 0.5);
   font-size:18px;
   padding:30px;
   color:black;
   line-height:1.8;
   margin:0 100 0 0;
   border-radius:10px;
   float:right
}
p{
	font-family:"arial";
	background-color:rgba(255, 204, 153, 0.5);
	margin:0 100 0 100;
	font-size:20px;
	color:black;
	padding:15px;
        border-radius:10px;
        display: inline;
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

#bloodi{width:40px;
	height:40px;
         display: inline;
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
 font-size:20px;
 padding:15px;
 border-radius:10px;
}
#link
{
 padding:14px;
 font-size:17px;
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
#join_img
{
   padding-left:100px
   opacity:0.1
   width:300px;
   height:300px;
   display: inline;
   margin:0 0 100 70;
   border-radius:700px

}
#join_img2
{
   padding-left:100px
   opacity:0.1
      width:100px;
   height:100px;
   display: inline;
   margin:0 0 90 84;
   border-radius:700px

}

.leg{
     font-size:28px;
	line-height:1.8;
	font-style:bold;
	display: inline;
	font size:30px;
	font-family:"Luis sans";
}
#pp {
  
  margin-top: 1em;
  margin-bottom: 1em;
  margin-left: 0;
  margin-right: 0;
  align="left"
}
</style>
<title>Join Us</title>
</head>
<body background="dark.jpg">


<span class="a"><img id="bloodi" src="bloodline.jfif"></span>
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

<form method="GET" action="">
  
  <fieldset style="width:600px">
  <legend><span class="leg">Register as a Donor</span></legend>
  <label for="name">Name</label><br>
  <input type="text" id="lname" name="name" ><br><br>
  Gender:<br>
  <div>
    
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
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
  <label for="mailid">Email:</label><br>
  <input type="email" id="mailid" name="mailid"  size="40"><br> <br> 
  
 
  <label for="add">Address:</label><br>
  <textarea name="address" rows="4" cols="40" >
  </textarea><br><br>
   
  <label for="City">City:</label><br>
  <input type="text" name="city"><br><br>
  <label for="mob">Mobile Number:</label><br>
  <input type="tel" name="mob"><br><br>

  <input type="submit" name="submit" value="SUBMIT"></br>
</fieldset>
</form>
<br><br><br><br><br>
    <img id="join_img" src="bb.jpg">

<br>
<br>
<img id="join_img2" src="aa.jpg">
<?php
if($_GET['submit'])
{


$name=$_GET['name'];
$gender=$_GET['gender'];
$dob=$_GET['dob'];
$email=$_GET['mailid'];

$address=$_GET['address'];
$bloodgroup=$_GET['bloodgroup'];
$city=$_GET['city'];
$mobno=$_GET['mob'];

 if($name!="" && $gender!="" && $dob!="" && $email!="" && $address!="" && $bloodgroup!="" && $gender!="" && $city!="" && $mobno!="")
   {

   $query=" Insert into join_us values('$name','$gender','$bloodgroup','$dob','$email','$address','$city','$mobno')";
   $data=mysqli_query($conn,$query);

     if($data)
	{
 	 echo "<script>alert('Successfully Registered')</script>";
	}
    }
else 
 {
   echo "<script>alert('All fields are required')</script>";
 }
}

?>



