<?php
if (isset($_POST["student_id"])) 
{
  $id = $_POST["student_id"];
  $dbconn = mysql_connect("localhost","root", "") or
  die('Could not connect: ' . mysql_error());
  mysql_select_db('portal') or die('Could not select database');
  $data  = array();
  $query = 'SELECT course_id FROM joinedx WHERE student_id='.$id.'';
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   
   foreach ($line as $col_value) {
      	$queryx = 'SELECT code,numberx FROM codename WHERE course_id='.$col_value.'';
  		$resultx = mysql_query($queryx) or die('Query failed: ' . mysql_error());
  		while ($linex = mysql_fetch_array($resultx, MYSQL_ASSOC)) {
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