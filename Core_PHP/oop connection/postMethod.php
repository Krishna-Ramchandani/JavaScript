<?php

include 'connection.php';
include 'form.php';



class SubmitData extends Connection{


	 public function __construct(){
		$conn=new Connection();
		if (!$conn) {
		  die("<br>Connection failed: ");
		}
		echo " Database Connected successfully";

		
	 }
	 public function checkStatusVar(){
		 //echo "Inside checkStatusVar Function";
		 if(isset($_POST['submitPost'])){
		echo "<br/>Submit POST Pressed<br/>";
		echo "Hello, ". $_POST['name'] .", Welcome to OOP PHP. Your email is ". $_POST['email'] ;

		$file=$_FILES['fileToUpload']['name'];
		 $target_path = "F:/images/".$file;   
		
		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
    	echo "File uploaded successfully!";  
		} else{  
   		 echo "Sorry, file not uploaded, please try again!";  
			}  
		}
		
		if(isset($_GET['submitGet'])){
		echo "<br/>Submit GET Pressed. Data is Visible in URL and in History<br/>";
		echo "Hello, ". $_GET['name'] .", Welcome to OOP PHP. Your email is ". $_GET['email'] ;
		}
	
 }
 }

$obj = new SubmitData();

$obj->checkStatusVar();


