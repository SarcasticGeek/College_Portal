<?php 
require_once '../session.php';
include'../../models/Stuff.php';
// require_once '../session.php';
include'../../models/course.php';
include'../../models/deliverable.php';
include'../../models/resource.php';
include'../../models/Persons.php';

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
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style >
    .new {
        text-align: left;
       position: relative;
       width: 1000px;
       left: 20px;
        border-radius:5px;
        margin:-13px;
        background-color: orange;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
     .newmessages {
     	position: relative;
     	
        text-align: left;
        
        border-radius:5px;
         margin:-13px;

        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .newmessages h1
    {
    	position: relative;
    	left:25px;
    }
    .new p
    {
    	position: relative;
    	left: 25px;
    }
    .openModal
    {

    }
    </style>
  </head>
  <body>
 <?php include 'header.php'; ?>
 <div class = "newmessages">
<h1>New messages</h1>
 
 	
     <p > <?php
 // $course_code = $_GET['course'];
  //$course_id = Course::get_id($course_code);
    // $course_id = $_GET['Stuff'];
     $courses_id = Stuff::get_Courses($_SESSION['person_id']);
     if(!empty($courses_id))
     {
        foreach ($courses_id as $course_id) {
            $messages = Stuff::getMessages($course_id);

            //$studen_name = Persons::get_name($course_id);
            foreach ($messages as $message) {
                
              $s_id = $message['student_id'];
              $name = Persons::get_name($s_id);
              $question=$message['question'];
              echo  '<div class="new">';
              echo'<h5 >'.$question. ' <a type="link" class="primary" data-toggle="modal" data-target="#ToStuff">Answer</a></h5>';
              echo  '</div>';
              echo'<div class="modal fade" id="ToStuff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
              echo'<div class="modal-dialog" role="document">';
              echo'<div class="modal-content">';
              echo'<div class="modal-header">';
              echo'<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
              echo'<span aria-hidden="true">×</span>';
              echo'</button>';
              echo'<h4 class="modal-title" id="myModalLabel" style="color:black;">Answer to Question : '.$question.' By '.$name.'</h4>';
              echo'</div>';
              echo'<div class="modal-body">';

              echo'<form class="form-horizontal" role="form" action="../../controllers/stuff_message.php" method ="post" >';
              echo'<input type = "hidden" name ="question" value = "'.$question.'">';
              echo'<input type = "hidden" name ="s_id" value = "'.$s_id.'">';
              echo'<input type = "hidden" name ="c_id" value = "'.$course_id.'">';
              echo'<div class="form-group">';
          
              echo'<div class="col-sm-2">';
              echo'<label for="inputPassword3" class="control-label">Answer</label>';
              echo'</div>';
              echo'<div class="col-sm-8">';
              echo'<textarea class="form-control" name="answer" id="inputPassword3" placeholder="Put your Answer here"></textarea>';
              echo'</div>';
              echo'</div>';
                      echo'<div class="form-group">';
                        echo'<div class="col-sm-offset-2 col-sm-10">';
                        echo'<button type="submit" class="btn btn-default">Answer</button>';
                        echo'</div>';
                      echo'</div>';
                    echo'</form>';
                  echo'</div>';
echo'</div>';
echo'</div>';
echo'</div>';

            }
            
        
        
        }
     }
 
  

  else
  {
    echo "no messages yet";
  }

?> 

</body></html>