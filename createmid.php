<?php

error_reporting(0);

$mysqli = new mysqli("localhost", "root", "", "test");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$name=$_POST['q_name'];
$Aans=$_POST['A_ans'];
$Bans=$_POST['B_ans'];
$Cans=$_POST['C_ans'];
$Dans=$_POST['D_ans'];
$correct=$_POST['correct_ans'];
$point=$_POST['point_ans'];
$tname=$_POST['t_name'];


if (!$name && $Aans && $Bans && $Cans && $Dans && $correct && !$point )
{
    exit;
}
else{
    $query = "INSERT INTO ".$tname."(q_num,A_ans,B_ans,C_ans,D_ans,correct_ans,point_ans) values('$name','$Aans','$Bans','$Cans','$Dans','$correct','$point') ";
    $result = $mysqli->query($query);
}


header("location:create1.php")

?>