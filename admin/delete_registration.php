<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from registers where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		header("Location:registration.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>
