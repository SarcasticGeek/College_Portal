  <?php
  $studemail = Student::get_Email($_SESSION['person_id']);?>



  <div class="navbar navbar-inverse navbar-static-top" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="font-family:'Oswald',sans-serif'" href="#"><span>Faculty of engineering | A web portal between students &amp; TAs

</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="../../">Home of <?= $studemail ?></a>
            </li>
            <li>
              <a href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>