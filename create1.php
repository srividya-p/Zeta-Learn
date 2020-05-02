<?php 
    
    error_reporting(0);
    session_start();

    $mysqli = new mysqli("localhost", "root", "", "test");
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }

    if($_SESSION['currentrem']!==0)
    {
        $val=$_SESSION['currentrem'];
        $_SESSION['currentrem']--;

    }
    else if($_POST['t_quesno'] || $_POST['t_name'])
    {
        $val=$_POST['t_quesno']; 
        $tname = $_POST['t_name'];
        $tno=$_POST['t_quesno']; 
        $ttime=$_POST['t_time'];
        $_SESSION['currentrem']=$val-1;
        $_SESSION['t_name']=$tname;
        $_SESSION['t_quesno']=$tno;
        $_SESSION['t_time']=$ttime;

        $query1 ="CREATE TABLE IF NOT EXISTS ".$tname."(q_num int(11) not null AUTO_INCREMENT, primary key(q_num),A_ans varchar(50), B_ans varchar(50), C_ans varchar(50), D_ans varchar(50), correct_ans varchar(50), point_ans int(11));";
    $result1 = $mysqli->query($query1);
    $query2="INSERT INTO test_info(t_name) values('$tname')";
    $result2=$mysqli->query($query2);
    $query3="INSERT INTO test_info(t_quesno) values('$tno')";
    $result3=$mysqli->query($query3);
    $query4="INSERT INTO test_info(t_time) values('$ttime')";
    $result4=$mysqli->query($query4);
    }
    else{
        $val1=0;
        $val=0;
    }
    
?>

<!DOCTYPE HTML>
<head>
    <title>Create an exam paper</title>
    <link rel="stylesheet" href="style1excr.css">
</head>

<body>
<?php
    if($val > 0)
    {
    echo "<h1> Enter the ".$val." question details </h1>";
    echo "</br>";
    echo "<form action='createmid.php' method='post'>";
    echo "Enter the details for Question:</br>";
    echo "<input type=text class='input' style='width:63%' name='q_name' placeholder='Enter the Question' /></br>";
    echo "Enter the options: </br>";
    echo "A   <input type=text class='input' name='A_ans' style='width:62%' ></br>";
    echo "B   <input type=text class='input' name='B_ans' style='width:62%' ></br>";
    echo "C   <input type=text class='input' name='C_ans' style='width:62%' ></br>";
    echo "D   <input type=text class='input' name='D_ans' style='width:62%' ></br>";
    echo " <input type=text class='invis' name='t_name' value='".$_SESSION['t_name']."' style='width:62%' ></br>";
    echo "Score   <input type=text class='input' name='point_ans' style='width:57%' ></br>";
    echo " Correct_ans   <input type=text class='input' name='correct_ans' style='width:52%' ></br>";
    echo "<input type='Submit' value='Submit' class='corners1'> ";
    echo "</form>";
    echo "</br></br>";
    
    }
    else{
        echo "<h1> Done </h1>";
        $_SESSION['currentrem']=0;
        echo "<a href='adminpage.php' class='corner1' >Go back </a>"; 
    }



    ?>
</body>    

