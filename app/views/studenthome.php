<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Student Home</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="asset/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="asset/css/styles.css" rel="stylesheet">
    <link  rel="stylesheet"type="text/css"href= "asset/css/scrolling-nav.css">
  
  <style>
  .navbar-nav {
    margin-top: -20px;
    margin-left: 30px;
  }
  .navbar-brand.page-scroll{
    margin-top: -13px;
  }
  .navbar-nav.navbar-right ul
  {
  position: absolute;z-index: -999;

  }
  .alittlebitdown
  {
      width: 850px;
      margin-left: 200px;
      z-index: 1000;
      margin-top: 70px;
  }
  .dropdown-menu
  {
    z-index: 1050;
  }
  .courses_resources ul{
        text-align: left;
        background-color: #f2f3e7;
        border-radius:5px;
        margin:-13px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
}
.courses_delieverables ul{
        text-align: left;
        background-color: #ffffff;
        border-radius:5px;
        margin:-13px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
}
.tas_messages ul{
        text-align: left;
        background-color: #f2f3e7;
        border-radius:5px;
        margin:-13px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
}
.navbar-inverse
{
  height: 150px;
  background-color:#325C74;
  
  
}
.navbar-default img
{
  position: relative;
  top: -26px;
  
}

  </style>
  </head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="hidden_form_container" style="display:none;"></div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      <img alt="Brand" src="logo.png" width="60" height="55" top="20"id="logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">profile</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Courses <span class="caret"></span></a>
          <ul class="dropdown-menu" id ="coursesMenu">
            
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <nav class="navbar navbar-default navbar-fixed-top alittlebitdown" role="navigation"> 
        <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="page-scroll" href="#page-top">Resources</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top">Resources</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#deliverables">Deliverables</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#messages">Messages</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </div>
    </nav>

    <section id="intro" class="intro-section">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                    <h1>Resources For All Courses</h1>
                     <div class="courses_resources">
                    <ul id ="r_list">
                    </ul>
                    </div>
                      <a class="btn btn-info page-scroll" href="#deliverables">Next</a>
                </div>
            </div>
        </div>
        
    </section>
    <section id="deliverables" class="deliverables-section">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12">
                    <h1>Deliverables</h1>
                    <div class="courses_delieverables">
                    <ul id ="d_list">
                    </ul>
                    </div>
                      <a class="btn btn-info page-scroll" href="#messages">Next</a>
                </div>
            </div>
        </div>
        
    </section>
    <section id="messages" class="messages-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Messages from TAs</h1>
                    <div class="tas_messages">
                    <ul id ="m_list">
                    </ul>
                    </div>
                      <a class="btn btn-info page-scroll" href="#page-top">Next</a>
                </div>
            </div>
        </div>
        
    </section>
	<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript"src="asset/js/jquery.js'"></script>
  <script type="text/javascript"src="asset/js/jquery.easing.min.js"></script>
  <script type="text/javascript"src="asset/js/scrolling-nav.js"></script>
    <script type="text/javascript" src="asset/js/maintainscroll.jquery.min.js"></script>

  <script >
  var student_id = 1;
  var select = document.getElementById("coursesMenu");
  var d_list = document.getElementById("d_list");
  var r_list = document.getElementById("r_list");
  var m_list = document.getElementById("m_list");
  $.ajax({
        url: "http://localhost/college_portal/app/models/pullcourses.php",
        type: "post",
        data: {student_id:student_id},
        dataType : 'json',
        success: function(data){ // trigger when request was successfull
        //alert(data.querydata.courses);
        for (i = 0; i < data.querydata.courses.length; i++)
          {
            console.log(data.querydata.courses[i].course_code_number);
            var li = document.createElement("li");
            var a = document.createElement("a");
            a.textContent = data.querydata.courses[i].course_code_number;
            a.setAttribute('href', "http://www.msn.com");
            li.appendChild(a);
            select.appendChild(li);
          }
      },
  })
   $.ajax({
        url: "http://localhost/college_portal/app/models/pullalldelieverables.php",
        type: "post",
        data: {student_id:student_id},
        dataType : 'json',
        success: function(data){ // trigger when request was successfull
        //alert(data.querydata.courses);
        for (i = 0; i < data.querydata.deliverables.length; i++)
          {
            console.log(data.querydata.deliverables[i].name);
            var deliver = data.querydata.deliverables[i];
            var li = document.createElement("li");
            var a = document.createElement("a");
            a.textContent = deliver.name_d+" Deadline : "+deliver.deadline+" By "+deliver.prof_name;
            a.setAttribute('href', deliver.href_d);
            li.appendChild(a);
            d_list.appendChild(li);
          }
      },
  })
   $.ajax({
        url: "http://localhost/college_portal/app/models/pullallresources.php",
        type: "post",
        data: {student_id:student_id},
        dataType : 'json',
        success: function(data){ // trigger when request was successfull
        //alert(data.querydata.courses);
        for (i = 0; i < data.querydata.resources.length; i++)
          {
            console.log(data.querydata.resources[i].name);
            var deliver = data.querydata.resources[i];
            var li = document.createElement("li");
            var a = document.createElement("a");
            a.textContent = deliver.name_d+" By "+deliver.prof_name;
            a.setAttribute('href', deliver.href_d);
            li.appendChild(a);
            r_list.appendChild(li);
          }
      },
  })
   $.ajax({
        url: "http://localhost/college_portal/app/models/pullallmessages.php",
        type: "post",
        data: {student_id:student_id},
        dataType : 'json',
        success: function(data){ // trigger when request was successfull
        //alert(data.querydata.courses);
        for (i = 0; i < data.querydata.responses.length; i++)
          {
            console.log(data.querydata.responses[i].msg);
            var deliver = data.querydata.responses[i];
            var li = document.createElement("li");
            var a = document.createElement("a");
            a.textContent = deliver.msg+" By "+deliver.prof_name;
            li.appendChild(a);
            m_list.appendChild(li);
          }
      },
  })
  </script>
	</body>
</html>