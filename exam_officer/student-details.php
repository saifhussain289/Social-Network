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
      <h2 class="text-center">Student Details</h2>
      <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Paris')">Student Details</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Delete Students</button>
      </div>
      <div id="Paris" class="tabcontent active">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title text-center bg-info"><strong> Student  Details</strong></h4>
              <form action="search-record.php" method="post" class="form-inline" style="margin-bottom:50px;">
                <table style="margin-left:425px;">
                  <tr>
                    <td class="text-center">Saerch By  Student ID</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="search1"></td>
                  </tr>
                  <tr>
                    <td><center>
                        <input class=" btn btn-info " type="submit" value="Search" name="submit" id="Search" >
                      </center></td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped table-bordered">
                <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                <th>Student ID</th>
                  <th>F_Name</th>
                  <th>M_name</th>
                  <th>L_name</th>
                  <th>Department</th>
                  <th>Email ID</th>
                  <th>Mobile No</th>
                  <th>Approved</th>
                  </thead>
                <tbody>
                  <?php
		include("../db/connect.php");
			$query = "select * from registration order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							echo "<tr class='odd_row'>";
								echo "<td>".$data['id']."</td>";
								echo "<td>".$data['f_name']."</td>";
								echo "<td>".$data['m_name']."</td>";
								echo "<td>".$data['l_name']."</td>";
								echo "<td>".$data['department']."</td>";
								echo "<td>".$data['email']."</td>";
						       echo "<td>".$data['mobile']."</td>";
							    echo "<td><button class='btn btn-primary'><a href='#?id=".$data['id']." '>Approved</a></button></td>";
								echo "</tr>";
						
					}									
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div id="Tokyo" class="tabcontent">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title text-center bg-info" ><strong> Delete Student Details</strong></h4>
              <form action="search-record.php" method="post" class="form-inline" style="margin-bottom:50px;">
                <table style="margin-left:425px;">
                  <tr>
                    <td class="text-center">Saerch By  Student ID</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="search1"></td>
                  </tr>
                  <tr>
                    <td><center>
                        <input class=" btn btn-info " type="submit" value="Search" name="submit" id="Search" >
                      </center></td>
                  </tr>
                </table>
              </form>
            </div>
            <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped table-bordered">
                <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                <th>Student ID</th>
                  <th>F_Name</th>
                  <th>M_name</th>
                  <th>L_name</th>
                  <th>Department</th>
                  <th>Email ID</th>
                  <th>Mobile No</th>
                  <th>Delete</th>
                  </thead>
                <tbody>
                  <?php
		include("../db/connect.php");
			$query = "select * from registration order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							echo "<tr class='odd_row'>";
								echo "<td>".$data['id']."</td>";
								echo "<td>".$data['f_name']."</td>";
								echo "<td>".$data['m_name']."</td>";
								echo "<td>".$data['l_name']."</td>";
								echo "<td>".$data['department']."</td>";
								echo "<td>".$data['email']."</td>";
						       echo "<td>".$data['mobile']."</td>";
							    echo "<td><button class='btn btn-primary'><a href='delete-student.php?id=".$data['id']." '>Delete</a></button></td>";
								echo "</tr>";
						
					}									
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script> 
<!-- jQuery and Bootstrap --> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<!-- Plugins JS --> 
<script src="js/owl.carousel.min.js"></script> 
<!-- Custom JS --> 
<script src="js/script.js"></script>
</body>
</html>
