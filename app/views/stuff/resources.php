<div role="tabpanel" class="tab-pane active" id="Resources">
<br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example1-modal-sm">   <span class="glyphicon glyphicon-plus-sign" aria-hidden="false"></span> Resources</button>
  <div class="modal fade bs-example1-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:black;">Upload A Resource</h4>
                  </div>
        <form class="form-horizontal" role="form" id="UploadingResources"  action="../upload.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="whichupload" value="resource">

          <div class="form-group">
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
                        <label><input type="radio" value="sheet" name="type">sheet</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" value="slides" name="type">slides</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" value="book" name="type">book</label>
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
<div class="col-md-4">
  <div class="responsive-video">
    <iframe src = "../assets/js/ViewerJS/#../../../upload/res1.pdf" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
  </div>
  <h3>chapter 1</h3>
</div>
<div class="col-md-4">
  <div class="responsive-video">
    <iframe src = "../assets/js/ViewerJS/#../../../upload/res1.pdf" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
  </div>
  <h3>chapter 1</h3>
</div>
</div>