<div role="tabpanel" class="tab-pane" id="messages">
<ul class="list-group">
<?php
  $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code);
  $messages = Student::get_messages($_SESSION['person_id'],$course_id);
  if (!empty($messages))
  {
  	foreach ($messages as $message) {
  		$question = $message['question'];
  		$answer = $message['answer'];
  		echo'<li class="list-group-item"><div class="panel panel-default">';
  		echo'<div class="panel-heading"><h4 class="text-primary">Question: '.$question.'</h4></div>';
  		echo'<div class="panel-body">';
      if($answer != NULL)
        {
          echo'<h5 >From '.$course_code.' Stuff : '.$answer.'</h5>';
        }
        else
        {
          echo'<h5 >From '.$course_code.' Stuff : (No Answer yet)</h5>';
        }
  		
  		echo'</div>';
  		echo'</div>';
  		echo'</li>';
  	}
  }
  else
  {
  	echo'<div class="alert alert-info" role="alert">No Messages Yet Yet</div>';;
  }
?>
</ul>
</div>

