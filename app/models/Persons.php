<?php
include "../../dbconnect.php";

class Persons
{

	public static function login($useremail,$userpassword) {
		global $conn;

    $query = "SELECT id FROM person WHERE email='$useremail'";
    $result = $conn->query($query) or die('Query failed: ' . mysql_error());





      if($result->num_rows >0)

{
	while($line = $result->fetch_assoc())
  
   {
    $person_id = $line['id'];
    $queryx = "SELECT p_id FROM student WHERE p_id='$person_id'";
    //$queryname = "SELECT p_id FROM student WHERE p_id='$person_id'";
    $resultx =$conn->query($queryx) or die('Query failed: ' . mysql_error());
    if($resultx->num_rows>0)
    {
    	$ids=array();
     while ($linex = $resultx->fetch_assoc())
      {
        $student_id = $linex['p_id'];
     
        //array_push($ids,$row['id'])
        
        echo "student id is ".$student_id;
        
        //header('Location: studenthome.php');
      
  
  

}}
    
    else
    {
      $queryxx = "SELECT p_id FROM stuff WHERE p_id='$person_id'";
      $resultxx = $conn->query($queryxx) or die('Query failed: ' . mysql_error());
      while ($linexx = $resultxx->fetch_assoc())
      {
        $stuff_id = $linexx['p_id'];
       echo "stuff id is ".$stuff_id;
        //header('Location: index.php');
      }
    }
  }
}
else
{
  
  echo "Email or password is incorrect";
}
}
}
