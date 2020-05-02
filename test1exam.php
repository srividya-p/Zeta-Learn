<?php
session_start();
include 'dbh.php';

?>
<!DOCTYPE html>
<html>
<script>
    function timer()
    {
    var i=1;
    var wid=0;
    f=setInterval(()=>{
    wid=wid+1.67;
    document.getElementById('time').style.width=wid+'%'
    document.getElementById('time').style.display='block'
    i++;
    if(i==61)
    {disp(); }},1000);
    }
 </script>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="disp.css">
        <link rel="stylesheet" href="style1excr.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
            span{
                font-size:30px;
            }
          </style>  
    
    </head>
    <body>
         <!--    Headers           -->
         <div class="headr" >
            <a href="" class="logo" >ZetaLearn</a>
            <nav>
                <ul>
                <li>   <a href="users.php" class="headr-right"></i>PROFILE</a>   </li>
                <li>   <a href="index.html" class="headr-right"></i>LOGOUT</a>   </li>
                </ul>
            </nav>
        </div>
        
</br</br></br></br></br>
        <h1>Questions:</h1></br>
        <div class="display">
        <?php
        $_SESSION['count']=$_SESSION['count']+1;
        $count = $_SESSION['count'];
        $sql="select * from test where q_num='".$count."'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if($result->num_rows>0)
        {       
                echo "<form action='calsum.php' method='post' >";   
                echo "<span>".$count.". "."</span>";
                echo "    ";
                echo ""."<span>".$row["q_name"]."</span>";
                echo "<br>";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='A_ans'>";
                echo " "."<span>".$row["A_ans"]."</span>";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='B_ans'>";
                echo " "."<span>".$row["B_ans"]."</span>";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='C_ans'>";
                echo " "."<span>".$row["C_ans"]."</span>";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='D_ans'>";
                echo " "."<span>".$row["D_ans"]."</span>";
                echo "<br>";
                echo "<br>";
                echo "<input type='submit' value='submit' class='corners1'>";
                echo "<br>";
                echo "</form>";
                echo "<div id='bod'>";
                echo "<br>"; 
                echo "<div id='outtime'>";
                echo "<div id='time'> </div>";
                echo "</div><br>";
                echo "<script>timer();</script></div>";
        
            }
                    
        else{
            echo "<h1>Test Completed</h1></br>";
            echo "<a href=usertestdisplay.php class='corners1'> Back to basic<a/>";   
        }
        $conn->close();
        ?>
        </div>
    </body>
</html>