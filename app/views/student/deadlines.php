<div class="col-md-4">
            <h2>Recent Deadlines
              <br>
            </h2>
            <ul class="media-list">
              <?php
               $course_code = $_GET['course'];
               $course_id = Course::get_id($course_code);
               $deliverable_ids = Student::get_Deliverables_Ids($course_id);
               if(!is_null($deliverable_ids))
               {
               foreach($deliverable_ids as $deliverable_id)
               {
                 $deliverable_Name = Deliverable::get_name($deliverable_id);
                 $Course_id= $course_id;
                 $Course_code = $course_code;
                 $link_delv= Deliverable::get_des_link($deliverable_id);
                 $deadline_delv = Deliverable::get_deadline($deliverable_id);
                 $ay7aga = $deliverable_Name . $Course_code;
                 $forDivs = str_replace(' ', '', strtolower($ay7aga));
                 echo'<li class="media">';
                 echo'<div class="media-left">';
                 echo '<h3 class="text-center text-primary">'.$Course_code.' </h3>';
                 echo'</div>';
                 echo'<div class="media-body">';
                 echo'<h4 class="media-heading"><a href=" '.$link_delv.'" target="_blank">'.$deliverable_Name.'</a></h4>';
                 echo'<span class="glyphicon glyphicon-time" aria-hidden="false"></span>'.$deadline_delv;
                 
                 echo'<br>';

                 echo'<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-<?='.$forDivs.' ?>-modal-sm">   <span class="glyphicon glyphicon-plus-sign" aria-hidden="false"></span> Upload</button>';
                 echo'<div class="modal fade bs- '.$forDivs.' -modal-sm" tabindex="-1" role="dialog" aria-labelledby=" '.$forDivs.'">';
                 echo'<div class="modal-dialog modal-sm">';
                 echo'<div class="modal-content">';
                 echo'<div class="modal-header">';
                 echo'<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                 echo'</button>';
                 echo'<h4 class="modal-title" id=" '.$forDivs.'" style="color:black;">Select file to upload for '.$forDivs.'</h4>';
                 echo'</div>';
                 echo'<form class="form-horizontal" role="form" action="../upload.php" method="post" enctype="multipart/form-data">';
                 echo'<input type="hidden" name="whichupload" value="deadline">';
                 echo'<input type="hidden" name="courseid" value=" '.$Course_id.'>';
                 echo'<input type="hidden" name="deliverableid" value=" '.$deliverable_id.' ">';
                 echo'<input type="hidden" name="whichupload" value="deadline">';
                 echo'<input type="hidden" name="courseid" value=" '.$Course_id.' ">';
                 echo'<input type="hidden" name="deliverableid" value=" '.$deliverable_id.'">';
                 echo'<div class="form-group">';
                 echo'<div class="col-sm-12">';
                 echo'<input type="file" id="fileToUpload" class="form-control" name="fileToUpload">';
                 echo'</div>';
                 echo'</div>';
                 echo'<div class="form-group">';
                 echo'<div class="col-sm-offset-2 col-sm-10">';
                 echo'<div class="col-sm-offset-2 col-sm-10">';
                 echo'<button type="submit" class="btn btn-default">Upload</button>';
                 echo'</div>';
                 echo'</div>';
                 echo'</form>';
                 echo'</div>';
                 echo'</div>';
                 echo'</div>';
                 echo'</div>';
                 echo'</li>';
                 echo'';

               }
             }
             else
             {
              echo"non yet";
             }
               ?>         
            </ul>
          </div>