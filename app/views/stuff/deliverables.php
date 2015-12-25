<div class="col-md-4">
<h2>Deliverables</h2>


<ul class="nav nav-pills nav-stacked">
    <?php
    //include $_SERVER["DOCUMENT_ROOT"] . "/College_Portal/app/models/Stuff.php";
    //$courses = Stuff::get_Courses($_SESSION['person_id']);
    //foreach ($courses as $course) {
      //  $deliverables= Stuff:: get_Deliverables($_SESSION['person_id'],$course);

    //}
    ?>
<?php $deliverableIDOfstuff = 1 ; $deliverableNameOfstuff = "Report 1";?>
  <li role="presentation"><a href="deliverable.php?deliverable=<?= $deliverableIDOfstuff ?>"><?= $deliverableNameOfstuff ?></a></li>





<!---uploader -->
<?php  $Course_id= 1 ; 
                ?>
  <li role="presentation" id="UploadingOfdeliverable">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example0-modal-sm">   <span class="glyphicon glyphicon-plus-sign" aria-hidden="false"></span> Add deliverable</button>
          <div class="modal fade bs-example0-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel0" >
            <div class="modal-dialog" >
              <div class="modal-content">
               <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel" style="color:black;">Select file to upload</h4>
                          </div>
                <form class="form-horizontal" role="form"  action="../upload.php" method="get" enctype="multipart/form-data">
                  <div class="form-group">
                  <input type="hidden" name="whichupload" value="deliverable">
                  <input type="hidden" name="course_id" value="<?= $Course_id ?>">
                    <div class="col-sm-12">
                      <input type="file" id="fileToUpload" class="form-control" name="fileToUpload">
                    </div>
                  </div>
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
                        <span>Type</span>
                        <div class="radio">
                        <label><input type="radio" value="homework" name="type">homework</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" value="report" name="type">report</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                    <div class="col-sm-2">
                      Deadline
                    </div>
                      <div class='col-sm-6'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input name="deadline" type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker1').datetimepicker({
                         format: 'YYYY-MM-DD HH:mm:ss',
                         // extraFormats: [ 'DD.MM.YY' ]
                        });
                    });
                </script>
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
    </li>
</ul>
  </div>