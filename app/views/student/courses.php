         <div class="col-md-2">
            <div class="btn-group btn-group-lg">
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Courses <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="?course=cse112">CSE112</a>
                </li>
                <li>
                  <a href="?course=cse113">CSE113</a>
                </li>
                <li>
                  <a href="?course=cse115">CSE115</a>
                </li>
              </ul>
            </div>
            </div>
            <div class="col-md-8">
                <h3>CSE322</h3>
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
                
                <li role="presentation">
                  <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages From Dr</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <?php include 'resources.php'; ?>
                <?php include 'tutorials.php' ;?>
                <?php include 'messages.php'; ?>
              </div>
            </div>