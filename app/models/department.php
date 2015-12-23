<?php
include "../../dbconnect.php";

class department
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