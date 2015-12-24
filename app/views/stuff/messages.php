
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <style >
    .new {
        text-align: left;
       
        border-radius:5px;
        margin:-13px;

        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
     .newmessages {
     	position: relative;
     	
        text-align: left;
        background-color: lightgray;
        border-radius:5px;
        margin:-13px;

        margin-top: 10px;
        margin-bottom: 20px;
        padding: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .newmessages h1
    {
    	position: relative;
    	left:25px;
    }
    .new p
    {
    	position: relative;
    	left: 25px;
    }
    </style>
  </head>
  <body>
 <?php include 'header.php'; ?>
 <div class = "newmessages">
<h1>New messages</h1>
 <div class="new">
 	 <p id="empty">No new messages</p>
 </div>
</div>
</body></html>
