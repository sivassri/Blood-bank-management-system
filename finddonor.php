<?php
 $db = mysqli_connect('localhost','root','','bbms')
 or die('Error connecting to MySQL server.');

  if(isset($_POST['submit'])){
       session_start();
        $city = mysql_real_escape_string($_POST['city']);

        $sql= "INSERT INTO finddonor(city) VALUES ('$city')";
       mysqli_query($db,$sql);
}
?>


<html>
<head>
<style>
h1{
 text-align:center;
 color:white;
 font-family:"Lucida Bright";
 font-size:34px;
 background-color: #D32F2F;
 border: 15px green;
}
form
{
   font-family:"Helvetica";
   background-color: #D32F2F;
   font-size:24px;
   padding:15px;
   line-height:1.8;
   margin:100px 450px 100px 450px;
} 



</style>
<title>Find a Donor</title>
</head>
<body>
  <h1>Find a Donor</h1>
  <form method="post" action="finddonor.php">
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
  <br><button type="button id="button" value="submit">SUBMIT</button></br>
</form>


</body>
</html>