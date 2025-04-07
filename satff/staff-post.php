<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:../index.php");
	}
?>

<!doctype html>
<html lang="en">
<head>
<title>College Social Networking</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Mobland - Mobile App Landing Page Template">
<meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
<!-- Font -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Themify Icons -->
<link rel="stylesheet" href="css/themify-icons.css">
<!-- Owl carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<!-- Main css -->
<link href="css/style.css" rel="stylesheet">
<style>
.box{
	width:25%;
	float:left;
	margin:5px;
	padding:10px;

}
.box1{
	width:56%;
	float:left;
	margin:5px;
	padding:10px;
	border:1px solid #CCCCCC;
	box-shadow: 5px 5px 5px #aaaaaa;
	
}
.box2{
	width:15%;
	float:right;
	margin:5px;
	background:#096;
}
.hr {
  border: 0;
  background-color: #fff;
  border-top: 1px dashed #8c8c8c;
}
</style>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">
<!-- Nav Menu -->
<div class="nav-menu fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php include('menu.php');?>
      </div>
    </div>
  </div>
</div>
<header class="bg-gradient" id="home"></header>
<!--end menu section-->
<div class="container-fluid">
<div class="container">
<div class="box"></div>
<div class="box1">
<h4>Post</h4>
<form  action="" method="post" enctype="multipart/form-data">
<textarea class="form-control" name="post" cols="30" rows="4"></textarea>
<p style="padding-top:20px; font-size:18px; color:#C00">Choose Photo</p>
<input type="file" name="image">

<input type="submit" name="submit" class="btn btn-info" style="margin-left:500px;">
</form>
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
				 $query = 'INSERT INTO `staff_post` (`post`,`image`, `username`,`date_time`) VALUES
("'.$post.'", "'.$image_name.'", "'.$_SESSION['username'].'", "'.$create_date.'")';
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Post has been Submitted Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='staff-post.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>

<hr class="hr">
<table class="table">
                <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                <tbody>
                  <?php
		include("../db/connect.php");
			$query = "select * from staff_post order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							    echo "<tr class='odd_row'>";
								echo "<td><img src='../images/images.jpg' width='80px' height='50px'>".$data['username']."</td>";
								echo "<td class='text-right'>".$data['date_time']."</td>";
								echo "</tr>";
							    echo "<tr class='odd_row'>";
								echo "<td colspan='2'>".$data['post']."</td>";
								echo "</tr>";
						
					}									
				?>
                </tbody>
              </table>
</div>

<div class="box2">
  
</div>
</div>
</div>
<!-- jQuery and Bootstrap --> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<!-- Plugins JS --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- Custom JS --> 
<script src="js/script.js"></script>
</body>
</html>
