<div role="tabpanel" class="tab-pane" id="messages">
<div class="container">
<ul class="list-group">
<?php
  $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code);
  $messages = Student::get_messages($_SESSION['person_id'],$course_id);
  if (!empty($messages))
  {
  	foreach ($messages as $message) {
  		$doctorname = Persons::get_name($message['t_id']);
  		$question = $message['question'];
  		$answer = $message['answer'];
  		echo'<div class="panel panel-default">';
  		echo'<div class="panel-heading"><h4 class="text-primary">Question: '.$question.'</h4></div>';
  		echo'<div class="panel-body">';
  		echo'<h5 >'.$doctorname.':'.$answer.'</h5>';
  		echo'</div>';
  		echo'</div>';
  		echo'</div>';
  	}
  }
  else
  {
  	echo "no messages yet";
  }
?>
</ul>
</div>
</div>

