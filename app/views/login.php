<?php
require_once 'session.php';

if ( logged_in() ) {
  $person_id = $_SESSION['person_id'];
  if($_SESSION['studentOrNot']/*checking by db if stud or stuff*/){
    header("Location:student");
  }else{
        header("Location:stuff");
  }
}
$_SESSION['person_id'] = 1;
$_SESSION['studentOrNot'] = 1;
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
                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Password</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" name="password"class="form-control" id="inputPassword3" placeholder="Password">
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



</body>
</html>
