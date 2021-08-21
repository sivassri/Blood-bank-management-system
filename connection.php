<?php
$server="localhost";
$username="root";
$password="";
$db="bbms";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn)
echo "okyayy";
?>