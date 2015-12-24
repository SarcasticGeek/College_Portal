<?php
include '../../dbconnect.php';
class Stuff
{
    public static function is_stuff($id)
    {
        global $conn;
        $sql = "SELECT * FROM stuff WHERE p_id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    public static function get_phone($id)
    {
        global $conn;
        $sql = "SELECT phone FROM stuff WHERE p_id='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row["phone"];
        }
        else return NULL;
    }
    public static function get_unanswered($id)
    {
        global $conn;
        $unanswered = array( );
        $sql = "SELECT * FROM ask WHERE answer=NULL";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                $student_id = $row["s_id"];
                $stuff_id = $row["t_id"];
                $question = $row["question"];
                $date = $row["created_at"];
                $data = array(

                    "student_id" => $student_id,
                    "stuff_id" => $stuff_id,
                    "question" => $question,
                    "date" =>$date
                );
                array_push($unanswered,$data);
            }
            return $unanswered;
        }
        else return NULL;
    }
    public static function get_answered($id)
    {
        global $conn;
        $answered = array( );
        $sql = "SELECT * FROM ask WHERE answer<>NULL";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $student_id = $row["s_id"];
                $stuff_id = $row["t_id"];
                $question = $row["question"];
                $date = $row["created_at"];
                $data = array(

                    "student_id" => $student_id,
                    "stuff_id" => $stuff_id,
                    "question" => $question,
                    "date" => $date
                );
                array_push($answered, $data);
            }
            return $answered;
        }
        else return NULL;
    }
    public static function answer($id,$sd_id,$question,$date,$answer)
    {
        global $conn;
        $sql = "UPDATE ask SET answer='$answer' WHERE t_id='$id' AND s_id = '$sd_id'
                AND  question = '$question' AND created_at = '$date'";
        if ($conn->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public static function upload_resource($id)
    {
        global $conn;
    }
    public static function upload_deliverable($id)
    {
        global $conn;
    }
    public static function get_submitted($c_id,$d_id)
    {
        global $conn;
        $submitted = array();
        $sql = "SELECT sd_id,ans_link FROM submit WHERE c_id = '$c_id' AND d_id = '$d_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $student_id = $row["sd_id"];
                $answer_link = $row["ans_link"];
                $data = array(

                    "student_id" => $student_id,
                    "answer_link" => $answer_link
                );
                array_push($submitted, $data);
            }
            return $submitted;
        }
        else return NULL;
    }
    public static function get_nonSubmitted($c_id,$d_id)
    {
        global $conn;
        $nonSubmitted = array();
        $sql = "SELECT p_id FROM student WHERE p_id NOT IN (
              SELECT sd_id FROM submit WHERE c_id = '$c_id' AND d_id = '$d_id')";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row = $result->fetch_assoc())
            {
                $student_id = $row["p_id"];
                array_push($nonSubmitted,$student_id);
            }
            return $nonSubmitted;
        }
        else return NULL;
    }
}
?>