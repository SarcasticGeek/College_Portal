<?php $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code); ?><!---uploader -->
<div role="tabpanel" class="tab-pane" id="tuts">
<br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example2-modal-sm">   <span class="glyphicon glyphicon-plus-sign" aria-hidden="false"></span> Add Tutorial</button>
  <div class="modal fade bs-example2-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:black;">Select file to upload</h4>
                  </div>
        <form class="form-horizontal" role="form"  action="../upload.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="whichupload" value="tutorial">
          <input type="hidden" name="course_id" value="<?= $Course_id ?>">

           <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Name</span>
                        <input type="text" class="form-control" name="name" placeholder="name of file" aria-describedby="sizing-addon2">
                      </div>
                    </div>
          </div>
          <div class="form-group">
                    <div class="col-sm-12">
                      <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon3">Description</span>
                        <textarea type="text" name="description" class="form-control" placeholder="brief of Description" aria-describedby="sizing-addon3"></textarea>
                      </div>
                    </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
            <label for="basic-url">YouTube URL</label>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">http://www.youtube.com/embed/</span>
              <input type="text" class="form-control" name="IdOfYoutube" placeholder="id of youtube video" id="basic-url" aria-describedby="basic-addon3">
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Upload</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--- Resourses viewing -->
  <div role="tabpanel" class="tab-pane" id="tuts">
<br>
<?php
  $course_code = $_GET['course'];
  $course_id = Course::get_id($course_code);
  $resources_ids = Stuff::get_Resources_Ids($course_id);
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


</div>
