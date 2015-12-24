<?php
include "../../dbconnect.php";

class Ask_student
{
	public static function message_student($student_id,$ta_id,$question_1)
	{
		global $conn;

		$sql = "INSERT INTO ask (
                question,
                s_id,
                t_id,
                created_at
                
            )
            VALUES ('$question_1','$student_id','$ta_id',now())";
                
                
                 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
            

    }
}