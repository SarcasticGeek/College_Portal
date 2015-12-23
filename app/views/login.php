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


<style>
.navbar-inverse
{
  height: 150px;
  background-color:#325C74;
  
  
}
.form-control
{
  width:330px;
  margin-top: 50px;
}
.form-group 
{
  position: relative;
  left: 380px;
  bottom: -50px;
}
.img
{
  height: 20px;
}


p
{
  font-size: 40px;
  font-family: 'Oswald', sans-serif;
  position: relative;
  bottom: -60px;
  top:50px;
  width: 1000px;
}
.btn-primary
{
  position: relative;
  top:30px;
  left: 90px;
  width: 100px;
}
h1
{
  font-size: 15px;
  position: relative;
  top:30px;
  font-family: 'Oswald',sans-serif;
}
.form
{
  position: relative;
  left: 1000px;
}
.button
{
  position: relative;
  left: 100px;
}
</style>





</head>
<body>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="logo.png " width="110" height="120"id="logo"></a>
  
    </div>

    <div>

      <ul class="nav navbar-nav">
<p> Faculty of engineering <p>
  <h1>A web portal between students & TAs</h1>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
 
<!-- <div class="container">
  <div class="form-group">
    <form method="post">
      <label for="usr">Email:</label>
      <input type="text" class="form-control" id="usr" name="emaill">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="passw">
      <button type="button" class="btn btn-primary" name="btn-login">Login</button>
      </form>
    </div> -->
    <form action="login.php" method="POST">
<table align="center" width="20%"  border="0">
<tr>
<td><input type="text" class="form-control" name="emailk" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" class="form-control"name="passwordd" placeholder="Your Password" required /></td>
</tr>
<tr>
<td><button type="submit"class="btn btn-primary" name="btn-login">Sign In</button></td>
</tr>

</table>
</form>
 
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