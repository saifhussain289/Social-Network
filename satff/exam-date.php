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
	width:10%;
	float:left;
	margin:5px;
}
.box1{
	width:75%;
	float:left;
	margin:5px;
	padding:10px;
	border:1px solid #CCCCCC;
	box-shadow: 5px 5px 5px #aaaaaa;
	
}
.box2{
	width:10%;
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
<h4 class="text-center">Exam Date</h4>
<form  action="" method="post" enctype="multipart/form-data">
<select name="" class="form-control" style="width:400px; margin-left:230px;">
<option value="">Select Category</option>
<option value="computer">Computer</option>
<option value="IT">IT</option>
<option value="Electrical">Electrical</option>
<option value="Machnical">Machnical</option>
</select><br>
<select name="" class="form-control" style="width:400px; margin-left:230px; margin-bottom:10px;">
<option value="">Select Semester</option>
<option value="computer">SemI</option>
<option value="computer">SemII</option>
<option value="computer">SemIII</option>
<option value="computer">SemIV</option>
<option value="computer">SemV</option>
<option value="computer">SemVI</option>
<option value="computer">SemVII</option>
<option value="computer">SemVIII</option>
</select>
<button type="submit" name="submit"class="btn btn-info" style="margin-left:500px;">Exam Date</button>
</form>
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
