<?php
include 'env.php';
$servername = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = mysql_query("SELECT id, name FROM resources");
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
printf("ID: %s Name: %s", $row[0], $row[1]);
}
mysql_free_result($result);
?>
