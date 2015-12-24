<?php 
require_once '../session.php';

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
 		<?php include 'headOfmain.php'; ?>
        </div>
      </div>
    </div>
  

</body></html>