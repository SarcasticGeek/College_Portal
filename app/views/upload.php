<?php
if (isset($_POST)) {
	if ($_POST['whichupload'] == "resource") {
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
		         echo "Success: Added" . $file_name;
		      }
		      else{
		         print_r($errors);
		      }
		   }		
	}elseif ($_POST['whichupload'] == "tutorial") {
		# code...

	}elseif ($_POST['whichupload'] == "deliverable") {
		# code...
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
		         echo "Success: Added" . $file_name;
		      }
		      else{
		         print_r($errors);
		      }
		   }		
	}elseif ($_POST['whichupload'] == "deadline") {
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
		         echo "Success: Added" . $file_name;
		      }
		      else{
		         print_r($errors);
		      }
		   }
	}
}