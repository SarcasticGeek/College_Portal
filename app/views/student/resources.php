<div role="tabpanel" class="tab-pane active" id="Resources">
<br>
<?php
  $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code);
  $resources_ids = Student::get_Resources_Ids($course_id);
  if(!is_null($resources_ids))
    {
    foreach($resources_ids as $resources_id)
      {
        if(Resource::get_type($resources_id) == "slides" ||Resource::get_type($resources_id) == "book"||Resource::get_type($resources_id) == "sheet")
        {
          $filePDF = Resource::get_link($resources_id) ;
          $fileName = Resource::get_name($resources_id);
          $fileDisc = Resource::get_description($resources_id) ;
          echo'<div class="col-md-4">';
          echo'<div class="responsive-video">';
          echo'<iframe src = "../assets/js/ViewerJS/#'.$filePDF.'" width=\'400\' height=\'300\' allowfullscreen webkitallowfullscreen></iframe>';
          echo'</div>';
          echo'<h3>'.$fileName.'</h3>';
          echo'<p>'.$fileDisc.'</p>';
          echo'</div>';

        }
      }
    }
    else echo"No resources Yet";
?>
 <!--- Resourses viewing -->
  <?php //resourses without videos
  
   ?>
</div>