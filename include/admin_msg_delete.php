<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from admin_msg where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		echo "Successfully Deleted Record";
		header("Location: adminboard.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>