<?php
error_reporting(0);
    $val=$_POST['quesval'];
?>

<!DOCTYPE HTML>
    <head>
        <title> 
            Admin dashboard
        </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel='stylesheet' href="style1excr.css"  > 
        <link rel="stylesheet" href="reset.css"> 
    </head>

    <body>
        <!--    Headers           -->
        <div class="headr" >
            <a href="adminpage.php" class="logo" >ZetaLearn</a>
            <nav>
                <ul>
                <li>   <a href="users.php" class="headr-right"></i>PROFILE</a>   </li>
                <li>   <a href="index.html" class="headr-right"></i>LOGOUT</a>   </li>
                </ul>
            </nav>
        </div>
    <br><br><br></br>
    </br>
    <p style="font-size:30px">Create a new exam</p></br>
    <form action="create1.php" method="post" >
        Enter the test name : <input type="text" name="t_name" placeholder=""></br></br>
        Enter the number of questions: <input type="text" name="t_quesno" placeholder=""></br></br>
        Enter the time : <input type="text" name="t_time" placeholder="in minutes"> </br> </br>
        <input type="submit" class="corners1" value="Submit">  

    </form>
</body>

