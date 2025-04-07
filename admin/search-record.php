<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:../index.php");
	}
?>
<?php 
             if(isset($_POST['submit'])){
			 include('../db/connect.php');
			$search1 =$_POST["search1"]; 
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
<h3 class="text-center" style="margin:5px;">Student Serach Details</h3>
 <?php 
             if(isset($_POST['submit'])){
			$temp=0;
			$result=mysql_query("SELECT * FROM registration where id='$search1'");
			
			while($data= mysql_fetch_array($result))
			{
			      $temp=1;
				 $id = $data['id'];
  echo"<table class='table table-bordered'>
   <thead style='background:#000; color:#FFF; font-size:12px; font-weight:bold;'>
                 <th>Student ID</th>
                    <th>F_Name</th>
                    <th>M_name</th>
                    <th>L_name</th>
                    <th>Department</th>
                    <th>Email ID</th>
                    <th>Mobile No</th>
                      </thead>
                  <tbody>
                            <tr class='odd_row'>
								<td>".$data['id']."</td>
								<td>".$data['f_name']."</td>
							<td>".$data['m_name']."</td>
								<td>".$data['l_name']."</td>
							<td>".$data['department']."</td>
								<td>".$data['email']."</td>
						   <td>".$data['mobile']."</td>
							   </tr>
	";
	 }
if($temp==0)
	echo"<tr><td colspan='13' align='center'><font color='black'><center><h1 style='margin-top:20px;'> Data Not Fond!</h1></center></font></td></tr>";
	echo "</table>";
	 }
    ?>
    <button class="btn btn-info"><a href="student-details.php">Back</a></button>
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
