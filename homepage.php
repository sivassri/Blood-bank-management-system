<?php

$server="localhost";
$username="root";
$password="";
$db="bbms";

$conn=mysqli_connect($server,$username,$password,$db);

?>
<html>
<head>
<style>
th,tr{
	padding:20px;
    font-family:"verdana";
	color:red;
	text-align:"center";
}
	
td{
	padding:20px;
    font-family:"verdana";
	color:white;
	background-color:indianred;
	border:solid white 1px;
	text-align:center;
}
#table{
	    text-align:center;
		margin-left:90px;
		margin-top:100px;
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
#blood{
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
 font-family:"verdana";
 font-size:20px;
 padding:15px;
 
}
#link
{
 padding:15px;
 font-size:17px;
 border-radius:15px;
}
a{
	text-decoration:none;
}
a:hover {
  color: black;
  border-radius:15px;
  background-color:gainsboro;
}
#recent{
	border-radius:150px;
	padding:20px;
	margin:50 100 50 100;
	display:inline;
}
#divv{
    background-color:#17A589  ;
	padding:15px;
	color:white;
	font-size:18px;
	border-radius:30px;
	font-family:"verdana";
	margin:0 0 0 100 ;
	display:inline;
}
#divvv{
    background-color:#CC6666;
	padding:15px;
	color:white;
	font-size:18px;
	border-radius:30px;
	font-family:"verdana";
	font-style:bold;
	margin:0 0 0 175 ;
	display:inline;
}
#divvvv{
    background-color:#F44336 ;
	padding:15px;
	color:white;
	font-size:18px;
	border-radius:30px;
	font-family:"verdana";
	margin:0 0 0 160 ;
	display:inline;
}
</style>
<title> Homepage</title>
</head>
<body background="dark.jpg">


<span class="a"><img id="blood" src="bloodline.jfif"></span>
<span class=a><div class="b">Bloodline MIT<br></div></span>

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
</div>

<img id="recent" src="recentdonor1.jpg">
<img id="recent" src="save11.jpg">
<img id="recent" src="donor1.jpg">
<div id="divv">GIVE THE GIFT OF LIFE!</div>
<div id="divvv">DONATE BLOOD, SAVE LIVES.</div>

<div id="divvvv">YOU ARE SOMEBODY'S TYPE!</div>
<table id="table">
<th id="alo">RECENT BLOOD REQUESTS</th>

<?php
 echo "<tr><td>NAME</td><td>GENDER</td><td>BLOODGROUP</td><td>MOBILENO</td><td>HOSPITAL NAME</td><td>HOSPITAL ADDRESS</td><td>CITY</td></tr>";

 $sql=" Select name,bloodgroup,gender,mobno,hospital,address,city from requestblood";
 $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) 
	{
     echo "<tr><td>".$row['name']."</td><td>".$row['gender']."</td><td>".$row['bloodgroup']."</td><td>".$row['mobno']."</td><td>".$row['hospital']."</td><td>".$row['address']."</td><td>".$row['city']."</td></tr>";
    }

$conn->close();



?>
</table>
</body>
</html>
