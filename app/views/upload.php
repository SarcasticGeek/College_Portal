<?php
require_once 'session.php';
require_once '../models/student.php';
require_once '../models/Stuff.php';

if (isset($_POST['whichupload'])) {
	if ($_POST['whichupload'] == "resource") {
		# INPUTS : ?whichupload=resource&course_id=&fileToUpload=&name=&description=&type=sheet
		if(isset($_FILES['fileToUpload'])){
		      $errors= array();
		      $file_name = $_FILES['fileToUpload']['name'];
		      $file_size =$_FILES['fileToUpload']['size'];
		      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
		      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
		      
		      $expensions= array("pdf");
		      
		      if(in_array($file_ext,$expensions)=== false){
		         $errors[]="extension not allowed, please choose a PDF file.";
		      }
		      
		      if($file_size > 10097152){
		         $errors[]='File size must be lower than 10 MB';
				}
		      
		      if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"upload/".$file_name);
		         //Success	
		         $course_id = $_POST['course_id'];
		         $nameOfres = $_POST['name'];
		         $discOfres = $_POST['description'];
		         $typeOfres = $_POST['type'];
		         $stuffId = $_SESSION['person_id'];
		         $fileLink = "http://localhost/college_portal/app/views/upload/" . $file_name;
		         $msgfromModel = Stuff::upload_resource($nameOfres,$fileLink,$discOfres,$typeOfres,$stuffId,$course_id);
		         echo $msgfromModel;
		      }
		      else{
		      	echo "<pre>";
		         print_r($errors);
		         echo "</pre>";
		      }
		   }		
	}elseif ($_POST['whichupload'] == "tutorial") {
		# INPUTS whichupload=tutorial&course_id=&name=&description=&IdOfYoutube=
				$course_id = $_POST['course_id'];
		         $nameOfres = $_POST['name'];
		         $discOfres = $_POST['description'];
		         $typeOfres = "video";
		         $filelink = $_POST['IdOfYoutube'];
		         $stuffId = $_SESSION['person_id'];
		         $msgfromModel = Stuff::upload_resource($nameOfres,$filelink,$discOfres,$typeOfres,$stuffId,$course_id);
		         echo $msgfromModel;

	}elseif ($_POST['whichupload'] == "deliverable") {
		# INPUTS ?whichupload=deliverable&course_id=&fileToUpload=&name=&description=&type=homework&deadline=2015-12-29+00-00-00
		if(isset($_FILES['fileToUpload'])){
		      $errors= array();
		      $file_name = $_FILES['fileToUpload']['name'];
		      $file_size =$_FILES['fileToUpload']['size'];
		      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
		      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
		      
		      $expensions= array("pdf");
		      
		      if(in_array($file_ext,$expensions)=== false){
		         $errors[]="extension not allowed, please choose a PDF file.";
		      }
		      
		      if($file_size > 10097152){
		         $errors[]='File size must be lower than 10 MB';
				}
		      
		      if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"upload/".$file_name);
		         //Success	
		         $course_id = $_POST['course_id'];
		         $nameOfres = $_POST['name'];
		         $discOfres = $_POST['description'];
		         $typeOfres = $_POST['type'];
		         $deadline = $_POST['deadline'];
		         $stuffId = $_SESSION['person_id'];
		         $fileLink = "http://localhost/college_portal/app/views/upload/" . $file_name;
		         $msgfromModel = Stuff::upload_deliverable($nameOfres,$discOfres,$fileLink,$typeOfres,$deadline,$stuffId,$course_id);
		         echo $msgfromModel;
		      }
		      else{
		         echo "<pre>";
		         print_r($errors);
		         echo "</pre>";
		      }
		   }		
	}elseif ($_POST['whichupload'] == "deadline") {
		//INPUTS ?whichupload=deadline&coursenid&deliverablename=Assignment+1&=1&fileToUpload=
		if(isset($_FILES['fileToUpload'])){
		      $errors= array();
		      $file_name = $_FILES['fileToUpload']['name'];
		      $file_size =$_FILES['fileToUpload']['size'];
		      $file_tmp =$_FILES['fileToUpload']['tmp_name'];
		      $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
		      
		      $expensions= array("pdf");
		      
		      if(in_array($file_ext,$expensions)=== false){
		         $errors[]="extension not allowed, please choose a PDF file.";
		      }
		      
		      if($file_size > 10097152){
		         $errors[]='File size must be lower than 10 MB';
				}
		      
		      if(empty($errors)==true){
		         move_uploaded_file($file_tmp,"upload/".$file_name);
		         //Success	
		         $course_id = $_POST['course_id'];
		         $deliverableid = $_POST['deliverableid'];
		         $studentId = $_SESSION['person_id'];
		         $fileLink = "http://localhost/college_portal/app/views/upload/" . $file_name;
		         $msgfromModel =  Student::submit_deliverable($studentId,$coursenid,$deliverableid,$ans_link);
		         echo $msgfromModel;
		      }
		      else{
		         echo "<pre>";
		         print_r($errors);
		         echo "</pre>";
		      }
		   }
	}
}