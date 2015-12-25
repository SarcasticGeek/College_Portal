<?php
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/Persons.php";
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/views/session.php";
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/student.php";
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/Stuff.php";
// require_once '../session.php';
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/course.php";
 if(isset($_POST["question"]) && isset($_POST["s_id"]) && isset($_POST["answer"]) && isset($_POST['c_id']) )
 {
    $data = Stuff::answer($_POST["c_id"],$_POST["s_id"],$_POST["question"],isset($_POST["answer"]));
   if($data) echo"Message sent";
   else echo"Message hasn't been sent";
 }
 else
 {
  echo "Something went wrong ";
 }
 ?>