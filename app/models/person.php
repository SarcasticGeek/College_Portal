<?php
include "../../dbconnect.php";

class Person
 {
	public $id;
	public $email;
	public $password;
	public $fname;
	public $lname;
	public $mname;

	public static function find_all() {
    //   	$data  = array();
  		// $queryy = "SELECT fname FROM person";
  		// $i = 0;
  		// $result = $conn->query($queryy) or die('Query failed: ' . mysql_error());

  		// while ($line = $result->fetch_assoc()) {
  		// 	$personx = array( "name" =>$line['fname']);
  		// 	$data ['person'][]  = $personx;
  		// 	echo $data["person"][$i]["name"];
  		// 	$i++;
    global $conn;
    $sql = "SELECT id, fname, lname FROM person";
   // $conn = new mysqli("localhost", "root", "","college_portal");
    $result = $conn->query($sql)or die('Query failed: ' . mysql_error());

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
    }
} else {
    echo "0 results";
}
  		}
  }

?>
