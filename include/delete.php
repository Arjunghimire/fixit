<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from messagepro where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		echo "Successfully Deleted Record";
		header("Location: message.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>