<?php
include "../../dbconnect.php";

class Persons
{

	public static function login($useremail,$userpassword) {
		global $conn;

    $query = "SELECT * FROM person WHERE email='$useremail'";
    $result = $conn->query($query) or die('Query failed: ' . mysql_error());





      if($result->num_rows >0)

{
	while($line = $result->fetch_assoc())
  
   {
    $person_id = $line['id'];
    $queryx = "SELECT * FROM student WHERE p_id='$person_id'";
    //$queryname = "SELECT p_id FROM student WHERE p_id='$person_id'";
    $resultx =$conn->query($queryx) or die('Query failed: ' . mysql_error());
    if($resultx->num_rows>0)
    {
    	$ids=array();
     while ($linex = $resultx->fetch_assoc())
      {
        $student_id = $linex['p_id'];
        $student_name = $line['fname'];
     
        //array_push($ids,$row['id'])
        
        echo "student name is ".$student_name;
        
        //header('Location: studenthome.php');
      
  
  

}}
    
    else
    {
      $queryxx = "SELECT p_id FROM stuff WHERE p_id='$person_id'";
      $resultxx = $conn->query($queryxx) or die('Query failed: ' . mysql_error());
      while ($linexx = $resultxx->fetch_assoc())
      {
        $stuff_id = $linexx['p_id'];
        $stuff_name = $line['fname'];

       echo "stuff id is ".$stuff_name;
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
