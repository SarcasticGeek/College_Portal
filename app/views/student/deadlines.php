<div class="col-md-4">
            <h2>Recent Deadlines
              <br>
            </h2>
            <ul class="media-list">
              <?php $deliverable_Name = "Assignment 1" ;$deliverable_id = 1;  $Course_id= 1; $Course_code = "CSE111"; 
               $link_delv = "http://localhost/college_portal/app/views/upload/res1.pdf";
               $deadline_delv = "10pm 30/12" ;
               $ay7aga = $deliverable_Name . $Course_code;
               $forDivs = str_replace(' ', '', strtolower($ay7aga)); ?>
              <li class="media">
                <div class="media-left">
                  <h3 class="text-center text-primary"><?= $Course_code ?></h3>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?= $link_delv ?>" target="_blank"><?= $deliverable_Name ?></a></h4>
                  <span class="glyphicon glyphicon-time" aria-hidden="false"></span> <?= $deadline_delv ?>
                  <br>
                  <!---Uploader -->
            
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-<?= $forDivs ?>-modal-sm">   <span class="glyphicon glyphicon-plus-sign" aria-hidden="false"></span> Upload</button>
                  <div class="modal fade bs-<?= $forDivs ?>-modal-sm" tabindex="-1" role="dialog" aria-labelledby="<?= $forDivs ?>">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                      <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                    <h4 class="modal-title" id="<?= $forDivs ?>" style="color:black;">Select file to upload for <?= $forDivs ?></h4>
                                  </div>
                        <form class="form-horizontal" role="form" action="../upload.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="whichupload" value="deadline">
                                          <input type="hidden" name="courseid" value="<?= $Course_id ?>">
                                          <input type="hidden" name="deliverableid" value="<?= $deliverable_id ?>">

                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="file" id="fileToUpload" class="form-control" name="fileToUpload">
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

                  </div>
              </li>
            </ul>
          </div>