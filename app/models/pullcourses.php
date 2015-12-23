<?php
if (isset($_POST["student_id"])) 
{
  $id = $_POST["student_id"];
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "college_portal";
  $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  $data  = array();
  $query = "SELECT course_id FROM joinedx WHERE student_id='$id'";
  $result = mysqli_query($connection,$query) or die('Query failed: ' . mysql_error());
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
   
   foreach ($line as $col_value) {
      	$queryx = "SELECT code,numberx FROM codename WHERE course_id='$col_value'";
  		$resultx = mysqli_query($connection,$queryx) or die('Query failed: ' . mysql_error());
  		while ($linex = mysqli_fetch_array($resultx, MYSQLI_ASSOC)) {
  			$course_code_number="";
   			foreach ($linex as $col_valuex) {
   				$course_code_number = $course_code_number.$col_valuex;
   			}
   			$course = array(
					"course_code_number" => $course_code_number,
					);
				$data['courses'][] = $course;
   		}
   }
   
}
print json_encode(array("querydata" =>$data));
//echo $data["courses"][1]["course_code"];
} 
else 
{
  echo "no student id  supplied";
}
?> 