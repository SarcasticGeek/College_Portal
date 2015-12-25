<?php
require_once '../views/session.php';
include'../models/student.php';
// require_once '../session.php';
include'../models/course.php';
 if(isset($_POST['msg']) && isset($_POST['course_code']))
 {
 	$message = $_POST['msg'];
 	$s_id = $_SESSION['person_id'];
 	$c_id = Course::get_id($_POST['course_code']);
 	$state = Student::ask($s_id,$c_id,$message);
 	if($state)header("Location:../views/student/?course=".$_POST['course_code']."&msg=message+sent");
 	else echo"message not sent";
 }
 else
 {
 	echo"message not set";
 }