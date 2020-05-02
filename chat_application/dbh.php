<?php

 $conn=mysqli_connect("localhost","root","","chat_system");
 if(!$conn){
 	die("connection failed".mysqli_connect_error());
 }else{
     echo "SUCCESSFUL";
     echo "<br>";
 }
?>