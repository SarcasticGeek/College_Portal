<?php
include $_SERVER["DOCUMENT_ROOT"] . "College_Portal/dbconnect.php";
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
		$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
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
		$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
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
	public static function get_Deliverables_Ids($c_id)
	{
		global $conn;
		$sql = "SELECT d_id FROM upload_d WHERE c_id ='$c_id'";
		$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			$d_ids = array();
			while($row = $result->fetch_assoc()) {
				array_push($d_ids,$row['d_id']);
			}
    		return $d_ids;
		}
    	else 
    	{
    		return NULL;
		}
	}
	public static function get_Resources_Ids($c_id)
	{
		global $conn;
		$sql = "SELECT r_id FROM upload_r WHERE c_id ='$c_id'";
		$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			$r_ids = array();
			while($row = $result->fetch_assoc()) {
				array_push($d_ids,$row['r_id']);
			}
    		return $r_ids;
		}
    	else 
    	{
    		return 0;
		}
	}
	public static function submit_deliverable($sd_id,$c_id,$d_id,$ans_link)
	{
		global $conn;
		$sql = "SELECT deadline FROM deliverable WHERE id ='$d_id'";
		$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				$deadline = $row['deadline'];
				date_default_timezone_set('Africa/Cairo');
				$current_date = new DateTime('now');
				$format = "Y-m-d";
				$date1  = DateTime::createFromFormat($format, $deadline);
				if($date1<$current_date)
				{
					$sql = "INSERT INTO submit (sd_id, c_id,d_id,ans_link)
					VALUES ('$sd_id', '$c_id','$d_id', '$ans_link')";
					if ($conn->query($sql) === TRUE)
					{
    					return "Deliverable Submitted";
					} 
					else
					{
						return "Sorry Something went wrong on submission";
					}
				}
				else
				{
					"Deadline Already Passed";
				}
			}
		}
    	else 
    	{
    		return "Deadline not found =/";
		}
		
	}

	public static function get_Email($id)
	{
		global $conn;
    	$sql = "SELECT email FROM person WHERE id ='$id'";
    	$result = $conn->query($sql)or die('Query failed: ' . mysql_error());
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc()) {
				$email = $row['email'];
				return $email;
			}
    		
		}
    	else 
    	{
    		return 0;
		}
	}
}