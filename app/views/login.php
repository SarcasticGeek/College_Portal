<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portal";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (mysql_errno())
{
  die("Database connection failed".mysql_error()  ."(" .mysql_errno() . ")");
}
?>

<?php
//perform data base query
$query = "SELECT * FROM persons";
$result = mysqli_query($connection,$query);

if(!$result)
{
  die("Database query failed.");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/css/bootstrap.css"></script>
 <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<style>
.navbar-brand
{
  position: relative;
  left:50px;
  font-family: 'Oswald',sans-serif;
}
</style>
<body>

 <div class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Faculty of engineering | A web portal between students &amp; TAs

</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </div>


   <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="assets\img\logo.png" class="img-responsive img-thumbnail">
          </div>
          <div class="col-md-8">
            <h1>Login</h1>
            <form class="form-horizontal" role="form" style="opacity: 0.5;">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Email</label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Password</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php

  //Start session
  session_start();
 
  

if(isset($_POST['btn-login']))
{
  $useremail = $_POST['emailk'];
  $userpassword = $_POST['passwordd'];
$sql = mysqli_query($connection,"SELECT * FROM persons WHERE email = '$useremail' AND password = '$userpassword'");
if(mysqli_num_rows($sql)>0)
{
  echo "Login successfully";
  header('Location: index.php');
}
else
{
  header('Location: failed.php');
  echo "Email or password is incorrect";
}

}










?>

</body>
</html>
<?php
mysqli_close($connection);
?>