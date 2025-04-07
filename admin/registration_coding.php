<?php
if(isset($_POST['submit'])){
	 include('../db/connect.php');
	//PHOTO1
	$image_name = $_FILES["image"]["name"];
	$location = "facultyt_photo/";
	$uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $location.$image_name);
  	$photo="image/" . $_FILES["image"]["name"];
		
                    $f_name= mysql_real_escape_string($_POST['f_name']) ;
					$m_name= mysql_real_escape_string($_POST['m_name']);
					$l_name= mysql_real_escape_string($_POST['l_name'] );
					$dob= mysql_real_escape_string($_POST['dob']);
					$email=  mysql_real_escape_string($_POST['email']);
					$address= mysql_real_escape_string($_POST['address']);
					$department = mysql_real_escape_string($_POST['department']);
					$ssc = mysql_real_escape_string( $_POST['ssc']);
					$hsc= mysql_real_escape_string($_POST['hsc']) ;
				   $graduation= mysql_real_escape_string($_POST['graduation']) ;
				     $h_back= mysql_real_escape_string($_POST['h_back']) ;
					$c_back= mysql_real_escape_string($_POST['c_back']);
					$mobile= mysql_real_escape_string($_POST['mobile'] );
					$username= mysql_real_escape_string($_POST['username']);
					$password =  mysql_real_escape_string($_POST['password']);
				
					 $query = "INSERT INTO `registration` (`f_name`,`m_name`,`l_name`,`dob`,`email`,`address`,`department`,`ssc`,`hsc`,`graduation`,`h_back`,`c_back`,`mobile`,`username`,`password`,`image`) VALUES
('$f_name','$m_name','$l_name','$dob','$email','$address','$department','$ssc','$hsc','$graduation','$h_back','$c_back','$mobile','$username','$password','$image_name')";
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Registration has been Submitted Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='student-details.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>
