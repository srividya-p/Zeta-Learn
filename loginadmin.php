
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="signupcss.css">
        <title>signup</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <style>
            body{
                margin: 1%;
            }
            .form-row{
                margin: 10px;
            }
            button{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Admin Login</h1>
        <form action="register.php" method="post">
            <div class="form-group col-md-6">
      <label for="uf_name">Name</label>
      <input type="text" class="form-control" name="uf_name" id="uf_name">
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>
  </div>
        <br><br><br>
  <a  href="adminpage.php" >Login</a>
</form>
    </body>
</html>