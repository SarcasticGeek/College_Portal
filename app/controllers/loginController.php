<?php
include '../models/Persons.php';
require_once '../views/session.php';
include'../models/student.php';
include '../models/Stuff.php';
// require_once '../session.php';
include'../models/course.php';
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
      if($data['isStudentorNot'] == 1)
      {
        $courses = Student::get_Courses($_SESSION['person_id']);
        $course = $courses[0];
        $course_code = Course::get_name_code($course);
        header("Location:../views/student/?course=".$course_code);
      } 
      else{
         $courses = Stuff::get_Courses($_SESSION['person_id']);
    $course = $courses[0];
    $course_code = Course::get_name_code($course);
        header("Location:../views/stuff/?course=".$course_code);
      }
    }
 }
 else
 {
  echo "email or password not set";
 }
 ?>