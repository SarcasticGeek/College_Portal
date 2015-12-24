<?php 
require_once '../session.php';

if ( logged_in() ) {
  $person_id = $_SESSION['person_id'];
  if(1/*checking by db if stud or stuff*/){
  }else{
        header("Location:../stuff");
  }
}else {
          header("Location:../login.php");

}
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
    .responsive-video {
		position: relative;
		padding-bottom: 56.25%;
		padding-top: 60px; overflow: hidden;
		}


		.responsive-video iframe,
		.responsive-video object,
		.responsive-video embed {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		}

.navbar-brand
{
  font-family: 'Oswald',sans-serif;
}

    </style>
  </head>
  <body>
      <?php include 'header.php'; ?>
  <div class="section">
      <div class="container">
        <div class="row">
          <?php include 'deadlines.php'; ?>
 		<?php include 'courses.php'; ?>
        </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Send Message to Stuff</h1>
            <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#ToStuff">press here</button>
            <!-- Modal -->
            <div class="modal fade" id="ToStuff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel" style="color:black;">Message To Stuff of course CSE223</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" role="form" action="send.php" >
                      <div class="form-group">
                        <div class="col-sm-2">
                          <label for="inputPassword3" class="control-label">Message</label>
                        </div>
                        <div class="col-sm-8">
                          <textarea class="form-control" name="msg" id="inputPassword3" placeholder=""></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>