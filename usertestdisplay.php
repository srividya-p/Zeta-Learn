<?php
error_reporting(0);
    $val=$_POST['quesval'];
?>

<!DOCTYPE HTML>
    <head>
        <title> 
            Check Exams
        </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel='stylesheet' href="style1excr.css"  > 
        <link rel="stylesheet" href="reset.css">
    </head>

    <body>
        <!--    Headers           -->
        <div class="headr" >
            <a href="userpage.php" class="logo" >ZetaLearn</a>
            <nav>
                <ul>
                <li>   <a href="users.php" class="headr-right"></i>PROFILE</a>   </li>
                <li>   <a href="index.html" class="headr-right"></i>LOGOUT</a>   </li>
                </ul>
            </nav>
        </div>
</br></br></br>
</br></br></br>
<h2> User exams </h2>
</br></br></br>
        <div class="adminexams" style="height:200px , width:150px">
            <h2>Test1</h2></br>
            <h3>Time : 20mins </h3></br>
        Difficulty:<h3 style="color:blue">Easy </h3> </br>
            <a href="test1process.php" class="adminlink next ">Information </a>  
        </div>
</br></br>
        <div class="adminexams" style="height:200px , width:150px">
            <h2>Test2</h2></br>
            <h3>Time : 20mins </h3></br>
        Difficulty:<h3 style="color:red">Difficult </h3> </br>
            <a href="#" class="adminlink next ">Information </a>  
        </div>
        </br></br>
       
