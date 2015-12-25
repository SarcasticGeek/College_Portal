<?php
include $_SERVER["DOCUMENT_ROOT"] . "College_Portal/dbconnect.php";


class Deliverable
 {
	public $id;
	public $name;
	public $des_link;
	public $brief_desc;
	public $type;


      public static function get_name($id){
          global $conn;
        $sql = "SELECT name FROM deliverable WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['name'];
            }
        } else {
            return NULL;
        }
      }
      public static function get_des_link($id){
          global $conn;
        $sql = "SELECT des_link FROM deliverable WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['des_link'];
            }
        } else {
            return NULL;
        }
        
      }
      public static function get_brief_desc($id){
          global $conn;
        $sql = "SELECT brief_desc FROM deliverable WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['brief_desc'];
            }
        } else {
            return NULL;
        }
        
      }
      public static function get_type($id){
          global $conn;
        $sql = "SELECT type FROM deliverable WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['type'];
            }
        } else {
            return NULL;
        }

      }
      public static function get_deadline($id){
          global $conn;
        $sql = "SELECT deadline FROM deliverable WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['deadline'];
            }
        } else {
            return NULL;
        }

      }

  }

?>
