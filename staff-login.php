<?php
ob_start();
session_start();
?>
<?php
if(isset($_POST['submit']))
{
	   include("db/connect.php");
		$uname = mysql_real_escape_string($_POST['name']);
		$pword = mysql_real_escape_string($_POST['password']);
		
		$query = mysql_query("select * from faculty where name='$uname' AND password='$pword'");
	    $row= mysql_fetch_array($query) ;
		$type = $row['designation']; 
		
	   $query1 = mysql_query("select * from faculty where name='$uname' AND password='$pword'");
	   $check_user = mysql_num_rows($query1);
		if($check_user==1)
		
		if( $type=="Placement")
		{
		
			$_SESSION['username'] = $uname;
			echo "<script type=\"text/javascript\">alert('Login Successful.');</script>";
			       header("location:satff/index.php");
		}
			else if( $type=="Examination")
			{
					$_SESSION['username'] = $uname;
				echo "<script type=\"text/javascript\">alert('Login Successful.');</script>";
			       header("location:exam_officer/index.php");
			}
			else{
				 echo"<script>alert('User Username and Password Invalid' )</script>";
			}
}
ob_flush();
?>