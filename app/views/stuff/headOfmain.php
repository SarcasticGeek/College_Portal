         <div class="col-md-8">
            <h3>CSE220</h3>
            <script>
              $('#myTabs a').click(function (e) {
                  e.preventDefault()
                  $(this).tab('show')
                });
            </script>
            <div>
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