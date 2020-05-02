<?php
session_start(); 

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

$sql = 'SELECT u_level,u_point FROM user_table where username="lkshbhra"';
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$level=$row['u_level'];
$currentpoint=$row['u_point'];

$selected= $_POST['answer'];

$qnum= $_SESSION['count'];
$sql = "SELECT correct_ans,point_ans,A_votes,B_votes,C_votes,D_votes FROM test where q_num='".$qnum."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$correctans= $row['correct_ans'];
$anspoint = $row['point_ans'];
$Aanspoint=$row['A_votes'];
$Banspoint=$row['B_votes'];
$Canspoint=$row['C_votes'];
$Danspoint=$row['D_votes'];


if ($selected == $correctans)
{
    $pointsc= $currentpoint +  $anspoint;
   # echo "$pointsc";
   $sql2 = "UPDATE user_table set u_point = ".$pointsc." where username='lkshbhra'";
    
    $conn->query($sql2);
}


if( $selected =='A_ans')
{
    $Aanspoint =$Aanspoint + ($level)*($anspoint);
    $sql3 = 'UPDATE test set A_votes='.$Aanspoint. ' where q_num ='. $_SESSION["count"].'';
    #$sql3="insert into test(A_votes) values('$Aanspoint') where q_num = $_SESSION['count'] ";
    $conn->query($sql3);

}
else if($selected =='B_ans')
{
    $Banspoint =$Banspoint + ($level)*($anspoint);
    $sql3 = 'UPDATE test set B_votes ='.$Banspoint.' where q_num ='.$_SESSION["count"].'';
    $conn->query($sql3);
} 
else if($selected =='C_ans')
{
    $Canspoint =$Canspoint + ($level)*($anspoint);
    $sql3 = 'UPDATE test set C_votes =' .$Canspoint. 'where q_num ='. $_SESSION["count"].'';
    #$sql3="insert into test(C_votes) values('$Canspoint') where q_num=$_SESSION['count'] ";
    $conn->query($sql3);
}
else if($selected=='D_ans')
{
    $Danspoint =$Danspoint + ($level)*($anspoint);
    $sql3 = 'UPDATE test set D_votes =' .$Danspoint. 'where q_num ='. $_SESSION["count"].'';
    $conn->query($sql3);
}

$conn->close();

header("location:test1exam.php");
?>