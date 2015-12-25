<?php
include '../models/Persons.php';
require_once '../views/session.php';
 if(isset($_POST["email"]) && isset($_POST["password"]))
 {
    $data = Persons::login($_POST["email"],$_POST["password"]);
    if(is_null($data))
    {
      echo" email or password incorrect";
    }
    else
    {
      $_SESSION['person_id'] = $data['id'];
      $_SESSION['studentOrNot'] = $data['isStudentorNot'];
      if($data['isStudentorNot'] == 1) header("Location:../views/student");
      else header("Location:../views/stuff");
    }
 }
 else
 {
  echo "email or password not set";
 }
 ?>