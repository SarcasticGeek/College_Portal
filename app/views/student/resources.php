<div role="tabpanel" class="tab-pane active" id="Resources">
<br>

 <!--- Resourses viewing -->
  <?php //resourses without videos
  $filePDF = "http://localhost/college_portal/app/views/upload/res1.pdf" ;
  $fileName = "chapter1";
  $fileDisc = "chapter 2 hena" ;
   ?>
   
<div class="col-md-4">
  <div class="responsive-video">
    <iframe src = "../assets/js/ViewerJS/#<?= $filePDF ?>" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
  </div>
  <h3><?= $fileName ?></h3>
  <p><?= $fileDisc ?></p>
</div>


<div class="col-md-4">
  <div class="responsive-video">
    <iframe src = "../assets/js/ViewerJS/#<?= $filePDF ?>" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe>
  </div>
  <h3><?= $fileName ?></h3>
  <p><?= $fileDisc ?></p>
</div>


</div>