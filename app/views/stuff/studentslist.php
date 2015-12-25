<?php $deliverable_name = "Homework 1 " ;
 if(isset($_GET['deliverable'])){ ?>
<div class="col-md-8">
<h2><?= $deliverable_name ?></h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>link of submission</th>
      </tr>
    </thead>
    <tbody>
    <?php
   include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/student.php";
    //echo $_GET['courseid'];
      $students = Stuff::get_students($_GET['courseid']);
    if($students != NULL) {
      foreach ($students as $student) {
        $name = Student::get_name($student);
        $email = Student::get_Email($student);
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$email</td>";
        $answer = Stuff::get_answerLink($student,$_GET['courseid'],$_GET['deliverable']);
        if($answer != NULL)
        {
          echo "<td>";
          echo '<a href='.$answer.'>Submitted</a>';
          echo "</td>";
        }
        else
        {
          echo "<td>";
          echo "No answer yet";
          echo "</td>";
        }

      }
    }
    else
      echo "NO ANSWERS";
    ?>
    </tbody>
  </table>
</div>

<?php } ?>
