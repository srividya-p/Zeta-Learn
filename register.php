<?php
#session_start();
#include 'dbh.php';

$uf_name=filter_input(INPUT_POST, 'uf_name');
$username=filter_input(INPUT_POST, 'username');
$u_email=filter_input(INPUT_POST, 'u_email');
$u_phone=filter_input(INPUT_POST, 'u_phone');
$password=filter_input(INPUT_POST, 'password');

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="test";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
    $sql = "INSERT INTO user_table(uf_name,u_email,u_phone,username,u_password) values('$uf_name','$u_email','$u_phone','$username','$password')";
    if($conn->query($sql)){
        echo "REGISTERED";
        header("location:itest.php");
    }
    else{
        echo "ERROR :". $sql ."<br>". $conn->error;
    }
    $conn->close();
}
?>