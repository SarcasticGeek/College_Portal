<?php
include "../models/student.php";
$courses = Student::get_Courses(1);

for($i = 0;$i<count($courses);$i++)
echo $courses[$i];
?>