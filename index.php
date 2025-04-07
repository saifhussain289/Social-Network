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
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
<!-- Nav Menu -->
<div class="nav-menu fixed-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-dark navbar-expand-lg"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
              <li class="nav-item"> <a class="nav-link" href="#features">ABOUT US</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#student">STUDENT</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#admin">ADMIN</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#faculty">FACULTY</a> </li>
              <li class="nav-item"><a  class="nav-link" href="#hod">MANAGER</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>
<header class="bg-gradient" id="home">
  <div class="img-holder mt-3"><img src="images/smo.jpg" style="border-radius:40px;" class="img-fluid"></div>
  <h1 style="margin-top:-80px; padding-bottom:50px; font-family: Arial;">College Social Networking </h1>

</header>
<div class="section light-bg" id="features">
  <div class="container">
    <div class="section-title">
      <h3>ABOUT US</h3>
      <h4  class="text-center">College Social Networking</h4>
    </div>
    <div class="row">
      <p class="card-text text-center">A social network for college with student login, administrator login, placement officer login and staff login. The administrator has the most authority. This account may be handled by principal or other senior member. This website notifies students about various college events and placement opportunities. Only staff, placement officer and administrator have the permission to post events. Students can view those notifications and react accordingly. Whenever a new event or notification is posted students are automatically notified of it by an Sms. It also informs the staff and gives them a list of students with high marks and those below standard attendance on a single button click. It also includes a student greviences area where students may post college inconsistencies and other problems. These posts will only be visible to the administrator.</p>
    </div>
  </div>
</div>

<!--student Section-->

<div class="section light-bg" id="student" style="background:#033; color:#FFF;">
  <div class="container">
    <div class="section-title">
      <h3>STUDENT LOGIN</h3>
      <small>Register User Login into the system for getting updates and Posts. </small><br>
    </div>
    <div class="col-md-4"  style="margin-left:375px;">
      <form action="student-login.php" method="post">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" class="form-control" name="username" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
          <br>
          <button type="submit" name="submit"  class="btn btn-info">Login</button>
          &nbsp;&nbsp;
          <button type="reset" class="btn btn-info">Reset</button>
        </div>
      </form>
    
    </div><br>
      <a href="admin/student-registration.php" style="padding-top:20px; padding-left:350px;">Click Here Registration</a>
  </div>
</div>
<!-- // end .section --> 

<!--admin section-->
<div class="section" id="admin">
  <div class="container">
    <div class="section-title">
      <h3>ADMIN LOGIN</h3>
      <small>Admin can Login into the system for performing various important task. </small> </div>
    <div class="col-md-4"  style="margin-left:375px;">
      <form action="chklogin.php" method="post">
        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" class="form-control" name="username" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
        <br>
        <button type="submit" name="submit" class="btn btn-info">Login</button>
        &nbsp;&nbsp;
        <button type="reset" class="btn btn-info">Reset</button>
        <label>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- // end .section -->

<div class="section bg-gradient"  id="faculty">
<div class="container">
  <h2 class="text-center text-white">FACULTY LOGIN</h2>
  <div class="col-md-4"  style="margin-left:375px; color:#FFF; margin-bottom:100px;">
    <form action="staff-login.php" method="post">
      <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" class="form-control" name="name" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
      <br>
       <button type="submit" name="submit" class="btn btn-info">Login</button>
      &nbsp;&nbsp;
      <button type="reset" class="btn btn-info">Reset</button>
      <label>
      </div>
    </form>
  </div>
</div>

<!-- // end .section --> 

<!--hod login-->

<div class="section light-bg" id="hod" style="background:#033; color:#FFF;">
  <div class="container">
    <div class="section-title">
      <h3>MANAGER LOGIN</h3>
      <small>Manager can review posts and can Approve them. </small><br>
    </div>
    <div class="col-md-4"  style="margin-left:375px;">
      <form action="hod_login.php" method="post">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" class="form-control" name="username" required>
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" class="form-control" name="password" required>
          <br>
          <button type="submit"  name="submit"class="btn btn-info">Login</button>
          &nbsp;&nbsp;
          <button type="reset" class="btn btn-info">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- // end .section -->
<div class="container-fluid">
  <p class="text-center" style="padding-top:50px;">COPYRIGHT © 2019. SAIF PROJECT (20667)</p>
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
