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
<div class="col-md-8" style="border:2px solid #CCC; margin:10px; border-radius:5px;">
<h3 class="text-left" style="margin:5px;">Student Registration</h3>
<p>Registered Condidate can view submitted information and can not edit make any changes 
in education Details Education information is for reference only.</p>
 
 <form class="form-horizontal" action="registration_coding.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-4" for="f_name">First Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="id" name="f_name" style="width:350px;" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="m_name">Middle Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="id" name="m_name" style="width:350px;" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-4" for="l_name">Last Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="id" name="l_name" style="width:350px;" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-4" for="dob">Date of Birth</label>
      <div class="col-sm-8">
        <input type="date" class="form-control" id="id" name="dob" style="width:350px;" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email address:</label>
      <div class="col-sm-8">          
        <input type="email" class="form-control"  name="email" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-4" for="mobile">Mobile Nomber:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control"  name="mobile" required>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-4" for="image">Profile Image:</label>
      <div class="col-sm-8">
        <input type="file" class="form-control" id="id" name="image" style="width:350px;" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="address">address</label>
      <div class="col-sm-8">          
      <textarea name="address" class="form-control" cols="70" rows="4"></textarea>
      </div>
    </div>
    
    <h3>Education Details</h3>
     <div class="form-group">
      <label class="control-label col-sm-4" for="departmant">Department:</label>
      <div class="col-sm-8">          
       <select name="department" class="form-control" required>
       <option>Select Department</option>
       <option value="IT">IT</option>
          <option value="computer science"> Computer Science</option>
             <option value="MCA">MCA</option>
       </select>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="ssc">Matric Percentage</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control"  name="ssc" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="hsc">10+2 Percentage</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control"  name="hsc" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-4" for="graduation">Graduation Percentage</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control"  name="graduation" required>
      </div>
    </div>
     
       
    
       <div class="form-group">
      <label class="control-label col-sm-4" for="username">Username:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control"  name="username" required>
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control"  name="password" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
         <button type="reset" name="reset" class="btn btn-primary">Reset</button>
          <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>
      </div>
    </div>
  </form>

</div>
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
