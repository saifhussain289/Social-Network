<?php
if(isset($_POST['submit'])){
	 include('../db/connect.php');
	//PHOTO1
	$image_name = $_FILES["image"]["name"];
	$location = "facultyt_photo/";
	$uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $location.$image_name);
  	$photo="image/" . $_FILES["image"]["name"];
		
                    $faculty_id= mysql_real_escape_string($_POST['faculty_id']) ;
					$name= mysql_real_escape_string($_POST['name']);
					$last_name= mysql_real_escape_string($_POST['last_name'] );
					$department= mysql_real_escape_string($_POST['department']);
					$designation =  mysql_real_escape_string($_POST['designation']);
					$email = mysql_real_escape_string($_POST['email']);
					$mobile = mysql_real_escape_string( $_POST['mobile']);
					$address= mysql_real_escape_string($_POST['address']) ;
				   $password= mysql_real_escape_string($_POST['password']) ;
					 $query = "INSERT INTO `faculty` (`faculty_id`,`name`,`last_name`,`department`,`designation`,`email`,`mobile`,`address`,`password`,`image`) VALUES
('$faculty_id','$name','$last_name','$department','$designation','$email','$mobile','$address','$password','$image_name')";
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Registration has been Submitted Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>
