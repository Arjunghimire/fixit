<div class="div_for_message_page">
		<?php
		    $user_id=$_SESSION['user_id'];
			require_once("connectDatabase.php");
			$sqlQueryMessage="select * from messagepro where id_pro='$user_id' order by id desc";
			$resultSelectMessage= mysql_query($sqlQueryMessage);
            $number_message = mysql_num_rows($resultSelectMessage);
			 ?>
			 <h2>All Messages (<?php echo $number_message;?>) </h2>
			 <?php
			 if($number_message=='0')
			 {
				 echo "<h4> No Messages Yet </h4>";
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
				<li class="list-group-item"><?php echo $address; ?></li>
				<li class="list-group-item"><?php echo $category; ?></li>
				<li class="list-group-item"><?php echo $description; ?></li>
				<li class="list-group-item"><?php echo $created_at; ?></li>
				<li class="list-group-item"><a href="delete.php?id=<?php echo $id;?>" name="delete" class="btn btn-danger">Delete</a></li>
				</ul>
		</div>
			<?php }
			 }?>
</div>		
