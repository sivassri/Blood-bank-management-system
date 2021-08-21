<?php
include("connection.php");
$query=" Insert into ugh values('aa','b')";
$data=mysqli_query($conn,$query);
if($data)echo "Successfully inserted ";
?>