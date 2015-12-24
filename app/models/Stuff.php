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
    public static function upload_resource($name_r,$link_r,$description_r,$type_r,$st_id,$c_id)
    {
        // this will create an entry in in the resources table 
        //and also an entry in the upload resource table
        global $conn;
        $sql = "INSERT INTO resource (name, link,description,type)
        VALUES ('$name_r', '$link_r','$description_r', '$type_r')";
        if ($conn->query($sql) === TRUE)
        {
            $sqlx = "SELECT id FROM resource WHERE link ='$link_r'";
            $result = $conn->query($sqlx)or die('Query failed: ' . mysql_error());
            $id_r = -1;
            if ($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                    $id_r = $row['id']; 
                $sqlxx = "INSERT INTO upload_r (st_id, c_id,r_id)
                VALUES ('$st_id','$c_id','$id_r')";
                if ($conn->query($sqlxx) === TRUE)
                {
                    return "UPLOAD SUCCESSFULL";
                } 
                else
                {
                    return "FAILED TO ENTER THE RESOURCE IN THE UPLOAD TABLE";
                }
            }
            else 
            {
                return "FAILED TO FIND THE RESOURCE";
            }
        } 
        else
        {
            return "FAILED TO ENTER THE RESOURCE IN THE RESOURCE TABLE";
        }
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