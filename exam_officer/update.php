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
	width:1%;
	float:left;
	margin:5px;
}
.box1{
	width:95%;
	float:left;
	margin:5px;
	padding:10px;
	border:1px solid #CCCCCC;
	box-shadow: 5px 5px 5px #aaaaaa;
	
}
.box2{
	width:1%;
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
 <h4 class="title text-center bg-info"><strong> Update Marks</strong></h4>
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
              <?php
			  
		include('../db/connect.php');
		$id = $_GET['id'];
		$query= mysql_query("select * from registration where  id='$id'");
		while ($data= mysql_fetch_array($query)) {
		?>
           <form class="form-horizontal" action="update-coding.php" method="post" enctype="multipart/form-data">
              <table style="margin-left:50px;">
              <tr>
              <td>&nbsp;</td>
              <td>ID</td>
              <td>SSC%</td>
               <td>HSC%</td>
               <td>GRADUATION</td>
               <td>&nbsp;</td>
              </tr>
               <tr>
               <td>Marks</td>
                <td>  <input type="text" class="form-control"  name="id" value="<?php echo $data['id'];?>"  required></td>
              <td>  <input type="text" class="form-control"  name="ssc" value="<?php echo $data['ssc'];?>"  required></td>
               <td> <input type="text" class="form-control"  name="hsc" value="<?php echo $data['hsc'];?>" required></td>
               <td> <input type="text" class="form-control"  name="graduation"  value="<?php echo $data['graduation'];?>"required></td>
               <td>    <button type="submit" name="submit" class="btn btn-primary">Update</button></td>
              </tr>
              </table>
                <?php
		}
			  ?>
              </form><br>
            
              
              
              
              <table class="table table-hover table-striped table-bordered">
                <thead style="background:#000; color:#FFF; font-size:12px; font-weight:bold;">
                <th>Student ID</th>
                  <th>F_Name</th>
                  <th>M_name</th>
                  <th>L_name</th>
                  <th>Department</th>
                  <th>Mobile No</th>
                   <th>SSC</th>
                    <th> HSC</th>
                    <th>GRADUATION</th>
                  <th>update</th>
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
						       echo "<td>".$data['mobile']."</td>";
							     echo "<td>".$data['ssc']."</td>";
								   echo "<td>".$data['hsc']."</td>";
								     echo "<td>".$data['graduation']."</td>";
							    echo "<td><button class='btn btn-primary'><a href='update.php?id=".$data['id']." '>update</a></button></td>";
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
