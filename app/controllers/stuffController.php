<?php
date_default_timezone_set('Africa/Cairo');
$date = new DateTime('now');
$format = "Y-m-d";
$deadline = "2015-12-24";
$date1  = DateTime::createFromFormat($format, $deadline);
//$date2  = DateTime::createFromFormat($format, $date);
echo date_format($date1,"Y-m-d H:i:s");
echo"<br>";
echo date_format($date,"Y-m-d H:i:s");
echo"<br>";
if($date>$date1) echo "deadline passed"."\n";
else echo "deadline still intact"
?>