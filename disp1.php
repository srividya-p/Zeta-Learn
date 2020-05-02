<?php
session_start();
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="disp.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <link rel="stylesheet" href="style1excr.css">     
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
    <br><br>
    <br>
        <h1>Analysis of Test1:</h1>
        <div class="display">
        <?php
         $sql="select * from test";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            $count=0;
            while($row=$result->fetch_Assoc()){
                $count++;
                echo "<form action='charts.php' method='POST'>";
                echo "<span>".$count." )"."</span>";
                echo "    ";
                echo ""."<span>".$row["q_name"]."</span>";
                echo "<br>";
                echo "<input name='qnum' class='invis' type='text' value=".$count.">";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='A_ans'>";
                echo " "."<span>".$row["A_ans"]."</span>";
                #<label><strong> Female </strong></label>
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='B_ans'>";
                echo " "."<span>".$row["B_ans"]."</span>";
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='C_ans'>";
                echo " "."<span>".$row["C_ans"]."</span>";
                #<label><strong> Female </strong></label>
                echo "<br>";
                echo "<input id='answer' name='answer' type='radio' value='D_ans'>";
                echo " "."<span>".$row["D_ans"]."</span>";
                echo "<br>";
                echo "Correct Value: "."<span>".$row["correct_ans"][0]."</span>";
                echo "<br>";
                echo "<input type='submit' class='corners1' style='width:100px;' value='Analyse'/>";
                echo "</form>";
                echo "<br>";
                echo "<br>";

                
               
            }
        }
        else{
            echo "NO";
        }
        $conn->close();
        ?>
        </div>
    </body>
</html>