<div role="tabpanel" class="tab-pane" id="tuts">
<br>
<!--- Resourses viewing -->
  <?php //resourses with videos
  $youtubeID ="NoCcEECYBuE" ;
  $fileName = "Ezay tt3lm electro";
  $fileDisc = "video gamel" ;
   ?>
   

<div class="col-md-4">
	<div class="responsive-video">
		<iframe width="420" height="315"
		src="http://www.youtube.com/embed/<?= $youtubeID ?>">
		</iframe>
	</div>
  <h3><?= $fileName ?></h3>
  <p><?= $fileDisc ?></p>
</div>


<div class="col-md-4">
  <div class="responsive-video">
    <iframe width="420" height="315"
    src="http://www.youtube.com/embed/<?= $youtubeID ?>">
    </iframe>
  </div>
  <h3><?= $fileName ?></h3>
  <p><?= $fileDisc ?></p>
</div>

</div>
