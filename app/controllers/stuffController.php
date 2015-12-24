<?php
include "../models/Stuff.php";
$resource = Stuff::upload_deliverable("first resource","more bla bla ba","www.google.com","Fun resource","01/5/20155",4,1);
echo $resource;
?>