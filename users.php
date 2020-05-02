<?php 

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


$sql = "SELECT username,u_email,u_level, u_point, u_badge FROM user_table where username='lkshbhra'";
$result=0;
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$conn->close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Manjari|Raleway&display=swap" rel="stylesheet">
    <title>User profile</title>
    <style media="screen">
    .logo{
        font-size: 30px;
        font-weight: bold;
        font-family: 'Raleway', sans-serif;
        padding-left: 10px;
        color: black;
        line-height:60px;
    }

    .headr
    {
      background: white;
    }
    .headr nav {
      float: right;
      padding-right: 30px;
    }

    *
    {
      text-decoration: none;
    }


    .headr nav ul {
      margin: 0 auto;
      display: block;
      width: fit-content;
      }

    .headr nav ul li {
      display: inline-block;
      float: left;
      list-style: none;
      padding: 0 16px;
      line-height: 60px;
    }

    .headr nav ul li a{
      font-family: 'Manjari';
      font-weight: 200;
      font-size: 16px;
      color: #111;
    }

    .red-square {
      margin-top: 40px;
      background-color: white;
      width: 400px;
      height: 530px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-top:30px;
      border-radius:20px;
      transform: translate(-50%, -50%);
      border: 2px solid white;
      box-shadow: 0 0 20px rgba(0,0,0,0);
      -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
      -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
      -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);
      text-align: center;
      font-size: 20px;
      }

    .red-square p
    {
      margin-left: 20px;
      margin-right: 20px;
      font-family: "Raleway";
    }

    .button {
      background-color: green; 
      border: none;
      color: white;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .button1 {border-radius: 8px;}
body
{
  background-image: url("images/userback.jpg");
}
    </style>
  </head>
  <body>
     <!--    Headers           -->
     <div class="headr" style="background: #a8ee90" >
            <a href="userpage.php" class="logo" >ZetaLearn</a>
            <nav>
                <ul>
                <li>   <a href="users.php" class="headr-right"></i>PROFILE</a>   </li>
                <li>   <a href="logout.php" class="headr-right"></i>LOGOUT</a>   </li>
                </ul>
            </nav>
        </div>
    <!--Photo section-->

    <div class="red-square">
</br>
        <img src="face.jpeg"style="padding-left: 75px;padding-right: 75px; padding-top:
        10px; height:195px ; width: 195px;"> </img> <br><br>
        <p><b  >Name :</b>   <?php  echo  $row["username"]; ?></p>
        <br>
        <p><b>Email :</b>    <?php  echo  $row["u_email"]; ?></p>
        <p></p> <br>
        <p><b>Level :</b>      <?php  echo  $row["u_level"]; ?> </p>
        <p></p> <br>

        <p><b>Points :</b>      <?php  echo  $row["u_point"]; ?> </p>
        <p></p> <br>

        <p><b>Badge :</b>      <?php  echo  $row["u_badge"]; ?> </p>
        <p></p> <br>

        

    </div>

  </body>
</html>