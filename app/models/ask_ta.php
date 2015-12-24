<?php
include "../../dbconnect.php";

class Ask_ta
{
	public static function message_ta($student_id,$ta_id,$answer_1)
	{
		global $conn;

		$sql = "INSERT INTO ask (
                answer,
                s_id,
                t_id,
                created_at
                
            )
            VALUES ('$answer_1','$student_id','$ta_id',now())";
                
                
                 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
            

    }
}
