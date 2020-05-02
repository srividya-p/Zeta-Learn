<?php

$lev=$_POST['lev'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}

$sql2 = "UPDATE user_table set u_level= ".$lev.   " where username='lkshbhra'";
    
$conn->query($sql2);

header("location:userpage.php");