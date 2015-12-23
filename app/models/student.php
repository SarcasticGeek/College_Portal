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
    	$sql = "SELECT studyingyear FROM student WHERE p_id ='$id'";
    	$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				$year = $row['studyingyear'];
				return $year;
			}
    		
		}
    	else 
    	{
    		return 0;
		}
	}
	public static function ask($id,$t_id,$question)
	{
		global $conn;
		$sql = "INSERT INTO ask (s_id, t_id, question)
		VALUES ('$id', '$t_id', '$question')";
		if ($conn->query($sql) === TRUE)
		{
    		return TRUE;
		} 
		else
		{
			return FALSE;
		}

	}
	public static function get_Courses($id)
	{
		global $conn;
		$sql = "SELECT c_id FROM joined WHERE student_id ='$id'";
		if ($result->num_rows > 0)
		{
			$courses = array();
			while($row = $result->fetch_assoc()) {
				array_push($courses,$row['c_id']);
			}
    		return $courses;
		}
    	else 
    	{
    		return 0;
		}

	}
	public static function get_Tas_OfCourse($id)
	{
		global $conn;
		$sql = "SELECT st_id FROM teach WHERE c_id ='$id'";
		if ($result->num_rows > 0)
		{
			$Tas = array();
			while($row = $result->fetch_assoc()) {
				array_push($Tas,$row['st_id']);
			}
    		return $Tas;
		}
    	else 
    	{
    		return 0;
		}

	}
}
?>