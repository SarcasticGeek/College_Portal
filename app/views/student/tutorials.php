<div role="tabpanel" class="tab-pane" id="tuts">
<br>
<?php
  $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code);
  $resources_ids = Student::get_Resources_Ids($course_id);
  if(!is_null($resources_ids))
    {
      $i = 0;
    foreach($resources_ids as $resources_id)
      {
        if(Resource::get_type($resources_id) == "video")
        {
          $i++;
          $youtubeID = Resource::get_link($resources_id) ;
          $fileName = Resource::get_name($resources_id);
          $fileDisc = Resource::get_description($resources_id) ;
          echo'<div class="col-md-4">';
          echo'<div class="responsive-video">';
          echo'<iframe width="420" height="315"
           src="http://www.youtube.com/embed/'.$youtubeID .'">
           </iframe>';
          echo'</div>';
          echo'<h3>'.$fileName.'</h3>';
          echo'<p>'.$fileDisc.'</p>';
          echo'</div>';

        }
      }
      if($i == 0)echo'<div class="alert alert-info" role="alert">Sorry No Tutorials Yet</div>';
    }
    else echo'<div class="alert alert-info" role="alert">Sorry No Tutorials Yet</div>';
?>

</div>
