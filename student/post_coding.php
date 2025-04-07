<?php
if(isset($_POST['submit'])){
	 include('../db/connect.php');
	//PHOTO1
	$image_name = $_FILES["image"]["name"];
	$location = "studet_photo/";
	$uploaded = move_uploaded_file($_FILES["image"]["tmp_name"], $location.$image_name);
  	$photo="image/" . $_FILES["image"]["name"];
		
                    $post= mysql_real_escape_string($_POST['post']) ;
					date_default_timezone_set("Asia/Kolkata");
					$create_time=date("h:i A");
					$create_date=date('y-m-d');
				 $query = 'INSERT INTO `post` (`post`,`image`, `username`,`date_time`) VALUES
("'.$post.'", "'.$image_name.'", "'.$_SESSION['username'].'", "'.$create_date.'")';
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Post has been Submitted Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='index.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>
