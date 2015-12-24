<?php
include "../models/Stuff.php";
$resource = Stuff::upload_resource("first resource","www.google.com","bla bla bla","Fun resource",4,1);
echo $resource;
?>