<?php
if (isset($_POST["student_id"])) 
{
  $id = $_POST["student_id"];
  $dbconn = mysqli_connect("localhost","root", "") or
  die('Could not connect: ' . mysql_error());
  mysqli_select_db('college_portal ') or die('Could not select database');
  $data  = array();
  $query = 'SELECT stuff_id,msg FROM respond WHERE student_id='.$id.'';
  $result = mysqli_query($dbconn,$query) or die('Query failed: ' . mysql_error());
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $prof_id = $line['stuff_id'];
      $msg = $line['msg'];
      $from_prof = 0;
      $queryx = 'SELECT fname,mname,lname FROM persons WHERE id='.$prof_id.'';
  		$resultx = mysqli_query($dbconn,$queryx) or die('Query failed: ' . mysql_error());
  		while ($linex = mysqli_fetch_array($resultx, MYSQLI_ASSOC))
        {
  			   $from_prof = "Dr.".$linex['fname']." ".$linex['mname']." ".$linex['lname'];
        }
   			$response = array(
          "prof_name" => $from_prof,
          "msg" =>$msg
					);
				$data['responses'][] = $response;
}
print json_encode(array("querydata" =>$data));
//echo $data["courses"][1]["course_code"];
} 
else 
{
  echo "no student id  supplied";
}
?> 