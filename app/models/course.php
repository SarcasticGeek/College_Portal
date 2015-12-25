<?php
include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/dbconnect.php";

class Course
 {
	public static function get_name($c_id) {
    global $conn;
    $sql = "SELECT name FROM course where id = '$c_id'";
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());
    if($result->num_rows >0){
      $row = mysqli_fetch_assoc($result);
      return $row['name'];
    }
    else{
      return NULL;
    }
  }
  public static function get_id($codename) {
    global $conn;
    $sql = "SELECT id FROM course where name_code = '$codename'";
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());
    if($result->num_rows >0){
      $row = mysqli_fetch_assoc($result);
      return $row['id'];
    }
    else{
      return NULL;
    }
  }
  public static function get_name_code($c_id) {
    global $conn;
    $sql = "SELECT name_code FROM course where id = '$c_id'";
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());
    if($result->num_rows >0){
      $row = mysqli_fetch_assoc($result);
      return $row['name_code'];
    }
    else{
      return NULL;
    }
  }

  public static function get_dep_id($c_id) {
    global $conn;
    $sql = "SELECT dep_id FROM course where id = '$c_id'";
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());
    if($result->num_rows >0){
      $row = mysqli_fetch_assoc($result);
      return $row['dep_id'];
    }
    else{
      return NULL;
    }
  }

}

?>