
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
<h2 class="text-center">Faculty Details</h2>
 <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Add Faculty</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Manage Faculty</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Delete Faculty</button>
</div>

<div id="London" class="tabcontent">
  <h3>Add Faculty</h3>
 <form class="form-horizontal" method="post" action="faculty_coding.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="faculty">Faculty Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" name="faculty_id" style="width:350px;" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="profile">Profile Image:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="id" name="image" style="width:350px;" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Faculty Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="name" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="last">Faculty Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="last_name" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="detp">Department:</label>
      <div class="col-sm-10">          
       <select name="department" class="form-control" required>
       <option>Select Department</option>
       <option value="IT">IT</option>
          <option value="computer science"> Computer Science</option>
             <option value="MCA">MCA</option>
       </select>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="desig" >Designation:</label>
      <div class="col-sm-10">          
         <select name="designation" class="form-control" required>
       <option>Select Designation</option>
       <option value="Placement officer">Placement officer</option>
          <option value="faculty"> Faculty</option>
             <option value="Examination Call">Examination Call</option>
       </select>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email address:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control"  name="email" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile Nomber:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="mobile" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="addres">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="address" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  name="password" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         <button type="reset" name="reset" class="btn btn-primary">Reset</button>
         <button type="Cancel" name="Cancel" class="btn btn-primary">Reset</button>
      </div>
    </div>
  </form>
</div>

<div id="Paris" class="tabcontent">
 <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title text-center" ><strong> Faculty Details</strong></h4>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped table-bordered">
                 <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                  <th>Faculty ID</th>
                    <th>Profile Photo</th>
                    <th>F_Name</th>
                    <th>L_name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Email ID</th>
                    <th>Mobile No</th>
                   
                        <th>Update</th>
                      </thead>
                  <tbody>
                    <?php
		include("../db/connect.php");
			$query = "select * from faculty order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							echo "<tr class='odd_row'>";
								echo "<td>".$data['faculty_id']."</td>";
								echo "<td> <img src='facultyt_photo/".$data['image']."' style='width:50px; height:50px;'></td>";
								echo "<td>".$data['name']."</td>";
								echo "<td>".$data['last_name']."</td>";
								echo "<td>".$data['department']."</td>";
								echo "<td>".$data['designation']."</td>";
								echo "<td>".$data['email']."</td>";
						        echo "<td>".$data['mobile']."</td>";
							    echo "<td><button class='btn btn-primary'><a href='edit.php?id=".$data['id']." '>Edit</a></button></td>";
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
                <h4 class="title text-center" ><strong> Delete Faculty Details</strong></h4>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped table-bordered">
                 <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                  <th>Faculty ID</th>
                    <th>Profile Photo</th>
                    <th>F_Name</th>
                    <th>L_name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Email ID</th>
                    <th>Mobile No</th>
                   
                        <th>Delete</th>
                      </thead>
                  <tbody>
                    <?php
		include("../db/connect.php");
			$query = "select * from faculty order by id DESC";
			$query_run = mysql_query($query);
			while($data = mysql_fetch_array($query_run))
			{
				$id = $data['id'];
							echo "<tr class='odd_row'>";
								echo "<td>".$data['faculty_id']."</td>";
								echo "<td> <img src='facultyt_photo/".$data['image']."' style='width:50px; height:50px;'></td>";
								echo "<td>".$data['name']."</td>";
								echo "<td>".$data['last_name']."</td>";
								echo "<td>".$data['department']."</td>";
								echo "<td>".$data['designation']."</td>";
								echo "<td>".$data['email']."</td>";
						echo "<td>".$data['mobile']."</td>";
							    echo "<td><button class='btn btn-primary'><a href='delete-faculty.php?id=".$data['id']." '>Delete</a></button></td>";
								echo "</tr>";
						
					}									
				?>
	
                   </tbody>
                </table>
              </div>
            </div>
          </div></div>
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
