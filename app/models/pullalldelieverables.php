<?php
if (isset($_POST["student_id"])) 
{
  $id = $_POST["student_id"];
  $dbconn = mysql_connect("localhost","root", "") or
  die('Could not connect: ' . mysql_error());
  mysql_select_db('portal') or die('Could not select database');
  $data  = array();
  $query = 'SELECT ta_id,type,name,link,deadline FROM deliverables';
  $result = mysql_query($query) or die('Query failed: ' . mysql_error());
  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      $prof_id = $line['ta_id'];
      $type = $line['type'];
      $name = $line['name'];
      $link = $line['link'];
      $deadline = $line['deadline'];
      $from_prof = 0;
      $queryx = 'SELECT fname,mname,lname FROM persons WHERE id='.$prof_id.'';
  		$resultx = mysql_query($queryx) or die('Query failed: ' . mysql_error());
  		while ($linex = mysql_fetch_array($resultx, MYSQL_ASSOC))
        {
  			   $from_prof = "Dr.".$linex['fname']." ".$linex['mname']." ".$linex['lname'];
        }
   			$deliverable = array(
					"type" => $type,
          "name_d" => $name,
          "prof_name" => $from_prof,
          "deadline" =>$deadline,
          "href_d" =>$link
					);
				$data['deliverables'][] = $deliverable;
}
print json_encode(array("querydata" =>$data));
//echo $data["courses"][1]["course_code"];
} 
else 
{
  echo "no student id  supplied";
}
?> 