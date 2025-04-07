<?php
ob_start();
session_start();
	include("../db/connect.php");
	if(!isset($_SESSION['username']))
	{
		header("location:../index.php");
	}
?>
<?php
	if(!isset($_REQUEST['id']))
	{
		header("location:delete-student.php");
		exit();
	}
	else
	{
		$id = $_REQUEST['id'];
		$del_str = "delete from registration where id = '$id'";
		$del_str_query = mysql_query($del_str);
		if($del_str_query)
		{
			$del_succeeded = "Items Successfully deleted.";
			echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('$del_succeeded')
						window.location.href='student-details.php';
						</SCRIPT>");
		}
	}
 ob_flush();
?>
