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
/* Style the tab */


.tab {
	overflow: hidden;
	border: 1px solid #ccc;
	background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
.tab button {
	background-color: inherit;
	float: left;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 14px 16px;
	transition: 0.3s;
	font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
	background-color: #ddd;
}
/* Create an active/current tablink class */
.tab button.active {
	background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
	display: none;
	padding: 6px 12px;
	border: 1px solid #ccc;
	border-top: none;
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
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">Approved Post</h2>
      <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped table-bordered">
          <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
          <th>Post ID</th>
            <th>Image</th>
            <th>Post</th>
            <th>Username</th>
            <th>Date & Time</th>
            <th>Approved</th>
              </thead>
          <tbody>
            <?php
		include("../db/connect.php");
			$query = "select * from post order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							    echo "<tr class='odd_row'>";
								echo "<td>".$data['id']."</td>";
								echo "<td> <img src='../student/studet_photo/".$data['image']."' style='width:50px; height:50px;'></td>";
								echo "<td>".$data['post']."</td>";
								echo "<td>".$data['username']."</td>";
								echo "<td>".$data['date_time']."</td>";
							    echo "<td><button class='btn btn-primary'><a href=' ' class='approve'; id=".$data['id'].">Approved</a></button></td>";
								echo "</tr>";
						
					}									
				?>
          </tbody>
        </table>
      </div>
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
<script>
const approve=document.querySelectorAll(".approve");
approve.forEach(function(item,index)
{
item.addEventListener("click",approvNow)
})
function approvNow(e)
{
e.preventDefault();
if(confirm("Do you Really want to Approved"))
{
const xhr=new XMLHttpRequest();
xhr.open("GET", "approve.php?id="+Number(e.target.id).true)
xhr.onload=function()
{
const messg=xhr.responseText;
constmessage=document.getElementById("Message")
message.innerHTML=messg;
}
xhr.sent()
}
}
</script>







</body>
</html>
