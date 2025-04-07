<?php
if(isset($_POST['submit'])){
	 include('../db/connect.php');
	
		
                    $id = mysql_real_escape_string( $_POST['id']);
					$ssc = mysql_real_escape_string( $_POST['ssc']);
					$hsc= mysql_real_escape_string($_POST['hsc']) ;
				   $graduation= mysql_real_escape_string($_POST['graduation']) ;
			
				$query = ("UPDATE registration SET id='$id', ssc='$ssc', hsc='$hsc', graduation='$graduation' where id = '$id'");
	$query_run = mysql_query($query);
			if($query_run)
			{
				$success_msg = "Marks Update Successfully !";
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('$success_msg')
					window.location.href='marks-update.php';
					</SCRIPT>");
			}
					}
//mysql_query($qury);


//$insert_pro=mysql_query($conn, $mes);
?>
