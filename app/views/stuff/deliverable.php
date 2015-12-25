<?php 
require_once '../session.php';
include'../../models/Stuff.php';
// require_once '../session.php';
include'../../models/course.php';
include'../../models/deliverable.php';
include'../../models/resource.php';

if ( logged_in() ) {
  $person_id = $_SESSION['person_id'];
  if($_SESSION['studentOrNot']/*checking by db if stud or stuff*/){
    header("Location:../student");
  }else{
  }
  }else {
          header("Location:../login.php");

}
?>
<html>
<?php include 'headhtmlincludes.php'; ?>
  <body>
      <?php include 'header.php'; ?>
  <div class="section">
      <div class="container">
        <div class="row">
          <?php include 'deliverables.php'; ?>
          <?php include 'studentslist.php' ;?>
        </div>
      </div>
    </div>
  

</body></html>