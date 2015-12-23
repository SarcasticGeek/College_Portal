<?php
if (isset($_POST["student_id"])) 
{
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "college_portal";
  $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  $id = $_POST["student_id"];
  $data  = array();
  $query = "SELECT ta_id,type,name,link FROM tutorials";
  $result = mysqli_query($connection,$query) or die('Query failed: ' . mysql_error());
  while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $prof_id = $line['ta_id'];
      $type = $line['type'];
      $name = $line['name'];
      $link = $line['link'];
      $from_prof = 0;
      $queryx = "SELECT fname,mname,lname FROM persons WHERE id='$prof_id'";
  		$resultx = mysqli_query($connection,$queryx) or die('Query failed: ' . mysql_error());
  		while ($linex = mysqli_fetch_array($resultx, MYSQLI_ASSOC))
        {
  			   $from_prof = "Dr.".$linex['fname']." ".$linex['mname']." ".$linex['lname'];
        }
   			$resource = array(
					"type" => $type,
          "name_d" => $name,
          "prof_name" => $from_prof,
          "href_d" =>$link
					);
				$data['resources'][] = $resource;
}
print json_encode(array("querydata" =>$data));
//echo $data["courses"][1]["course_code"];
} 
else 
{
  echo "no student id  supplied";
}
?> 