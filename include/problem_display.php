		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from problem where status='Yes' order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			  <h3>Latest Posts (<?php echo $number;?>) </h3>
			  <hr />
			 <?php
			 if($number=='0')
			 {
				 echo "<h4> No Post Yet </h4>";
			 }
			 else
			 {
			while($rowDisplayMessage=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayMessage['id'];
				 $fullname=$rowDisplayMessage['fullname'];
				 $address=$rowDisplayMessage['address'];
				 $category=$rowDisplayMessage['category'];
				 $description=$rowDisplayMessage['description'];
				 $created_at=$rowDisplayMessage['created_at'];
?>

		<div class="panel panel-default">
			<div class="list-group-item active"><h4 > <?php echo $fullname ?></h4></div>
				<ul class="list-group">
				<li class="list-group-item"><?php echo $description; ?></li>
				<li class="list-group-item">Posted at &raquo; <?php echo $created_at; ?></li>
				</ul>
		</div>
			<?php }
			 }?>
</div>		

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
	$sqlQueryDel="delete from problem where id='$id'";
	require_once("connectDatabase.php");
	$resultDisplayDel=mysql_query($sqlQueryDel);
	if($resultDisplayDel)
	{
		echo "Successfully Deleted Record";
		header("Location:message.php");
		exit();
	}
	else
	{
		echo "Failed To Delete Record";
	}

}
?>
<div class="display"></div>
