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
<h4 class="text-center">Create List</h4>

<form  action="create-list.php" method="post">
       <select name="stream" class="form-control" required="">
       <option>Select Stream</option>
       <option value="IT">IT</option>
       <option value="computer_science"> Computer Science</option>
       <option value="MCA">MCA</option>
       </select><br>
    
<input type="text" name="criteria" class="form-control" placeholder="Criteria"><br>
<input type="submit" name="submit" class="btn btn-info" style="margin-left:500px;">
</form>
<?php
if(isset($_POST['submit'])){
	 include('../db/connect.php');
	 $stream= mysql_real_escape_string($_POST['stream']) ;
	 $criteria= mysql_real_escape_string($_POST['criteria']) ;

	$query = "INSERT INTO `list` (`stream`,`criteria`) VALUES
('$stream','$criteria	')";
	 $query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Criteria has  Created Successfully !";
		          ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='create-list.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>


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
