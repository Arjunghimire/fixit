<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from advertisment where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		header("Location:advertisment.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>
