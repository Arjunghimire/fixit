<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from problem where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		header("Location:mainpage_admin.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>
