            <div class="col-md-2">
            <div class="btn-group btn-group-lg">
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Courses <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu" role="menu">
              <?php
              
               $courses = Stuff::get_Courses($_SESSION['person_id']);
               foreach ($courses as $course) {
                 $course_code = Course::get_name_code($course);
                 $course_name = Course::get_name($course);
                 echo"<li>";
                 echo'<a href="?course='.$course_code.'">'.$course_name.'</a>';
                 echo"</li>";
               }
              ?>
              </ul>
            </div>
            </div>
            <div class="col-md-8">
                <h3><?= $_GET['course'] ?></h3>
            </div>
            <script>
              $('#myTabs a').click(function (e) {
                  e.preventDefault()
                  $(this).tab('show')
                });
            </script>
            <div class="col-md-8">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#Resources" aria-controls="Resources" role="tab" data-toggle="tab">Resources</a>
                </li>
                <li role="presentation">
                  <a href="#tuts" aria-controls="tuts" role="tab" data-toggle="tab">Tutorials</a>
                </li>
                
               
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <?php include 'resources.php'; ?>
                <?php include 'tutorials.php' ;?>
               
              </div>
            </div>
          </div>