 <?php
		include("../db/connect.php");
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
            $id= mysql_real_escape_string($id);
            $id=htmlentities($id);
            $sql= "update post set status=1 where id= $id";
             $res= mysql_query($sql);
		}
	?>