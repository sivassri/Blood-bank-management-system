<?php
include("connection.php");
error_reporting(0);
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
  <form method="POST" action="">
  <input type="text" name="fname" value=""><br>
  <input type="text" name="lname" value=""><br>
  <br><input type="submit" name="submit" value="submit"></button></br>
</form>

<?php
if($_GET['submit'])
{

$fn=$_GET['fname'];
$ln=$_GET['lname'];

 if($fn!="" && $ln!="")
   {
    $query=" Insert into ugh values('$fn','$ln')";
    $data=mysqli_query($conn,$query);

     if($data)
	{
 	 echo "Successfully inserted ";
	}
    }
else 
 {
   echo "All fields are required ";
 }
}


?>


</body>
</html>