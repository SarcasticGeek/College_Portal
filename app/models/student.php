<?php
include "../../dbconnect.php";
Class Student
{
	public static function is_Student($id)
	{
		global $conn;
    	$sql = "SELECT p_id FROM student WHERE p_id ='$id'";
    	$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
    		return true;
		}
    	else 
    	{
    		return false;
		}
	}
	public static function get_Year($id)
	{
		global $conn;
    	$sql = "SELECT studyingyear FROM student WHERE p_id ='.$id'";
    	$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				$year = $row['studyingyear'];
			}
    		
		}
    	else 
    	{
    		return 0
		}
	}
}
?>