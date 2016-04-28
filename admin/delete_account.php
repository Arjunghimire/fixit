<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from admin_register where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		header("Location:admin_account.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>
