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
            return "true";
        }
        else
        {
            return "false";
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
    }
    public static function answer($id)
    {
        global $conn;
    }
    public static function upload_resource($id)
    {
        global $conn;
    }
    public static function upload_deliverable($id)
    {
        global $conn;
    }
    public static function get_submitted($id)
    {
        global $conn;
    }
    public static function get_nonSubmitted($id)
    {
        global $conn;
    }
}
?>