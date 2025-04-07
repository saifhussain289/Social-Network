

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
<div class="col-md-2"></div>
<?php
		include('../db/connect.php');
		$id = $_GET['id'];
		$query= mysql_query("select * from faculty where  id='$id'");
		while ($data= mysql_fetch_array($query)) {
		?>
<div class="col-md-8" style="border:2px solid #CCC; margin:10px; border-radius:5px;">
<h3>Update Faculty</h3>
 <form class="form-horizontal" method="post" action="update-coding.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="faculty">Faculty Id:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" name="faculty_id" value="<?php echo $data['faculty_id']; ?>" style="width:350px;" required>
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
        <input type="text" class="form-control"  name="name" value="<?php echo $data['name']; ?>" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="last">Faculty Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="last_name" value="<?php echo $data['last_name']; ?>" required>
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
        <input type="email" class="form-control"  name="email" value="<?php echo $data['email']; ?>" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile Nomber:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="mobile" value="<?php echo $data['mobile']; ?>" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="addres">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"  name="address" value="<?php echo $data['address']; ?>" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  name="password" value="<?php echo $data['password']; ?>" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
         
      </div>
    </div>
  </form>

</div>
<?php
		}
		?>
<div class="col-md-1"></div>
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
