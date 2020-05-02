<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <style>
            .container{
                font-family: Open Sans;
                font-size: 20px;
                color: red;
            }
            .collapse .navbar-collapse{
                color: black;
            }
            .jumbotron{
                margin: 1%;
                padding: 3px;
                padding-left: 5px;
                padding-right: 5px;
            }
            body{
                background-image: url(https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default" style="background-color: #455A64">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a href="#" class="navbar-brand">ZetaLearner</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="#" class="tcolor">About</a></li>
                    <li><a href="#" class="tcolor">Contact</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
  <h1>Hello everyone! Welcome to ZetaLearner</h1>
  <p>ZetaLearner is an online testing and evaluation website.</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
    </body>
</html>