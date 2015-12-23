<?php
include "../../dbconnect.php";

class Resource
 {
	public $id;
	public $name;
	public $link;
	public $description;
	public $type;


      public static function get_name($id){
          global $conn;
        $sql = "SELECT name FROM resource WHERE id=" . $id . "";
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
      public static function get_link($id){
          global $conn;
        $sql = "SELECT link FROM resource WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['link'];
            }
        } else {
            return NULL;
        }
        
      }
      public static function get_description($id){
          global $conn;
        $sql = "SELECT description FROM resource WHERE id=" . $id . "";
       // $conn = new mysqli("localhost", "root", "","college_portal");
        $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              return $row['description'];
            }
        } else {
            return NULL;
        }
        
      }
      public static function get_type($id){
          global $conn;
        $sql = "SELECT type FROM resource WHERE id=" . $id . "";
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

  }

?>
