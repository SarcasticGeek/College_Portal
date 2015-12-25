<?php
include $_SERVER["DOCUMENT_ROOT"] . "College_Portal/dbconnect.php";


class Department
 {
	public static function get_name($d_id) {
    global $conn;
    $sql = "SELECT name FROM department where id = '$d_id'";
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());
    if($result->num_rows >0){
      $row = mysqli_fetch_assoc($result);
      return $row['name'];
    }
    else{
      return NULL;
    }
  }

}

?>