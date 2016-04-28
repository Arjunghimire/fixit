		<?php
		    $user_id=$_SESSION['user_id'];
			require_once("connectDatabase.php");
			$sqlQueryMessage="select * from admin_msg where register_id='$user_id' order by id desc";
			$resultSelectMessage= mysql_query($sqlQueryMessage);
            $number_message = mysql_num_rows($resultSelectMessage);
			 ?>
			 <h2>Admin Messages (<?php echo $number_message;?>) </h2>
			 <?php
			 if($number_message=='0')
			 {
				 echo "<h4 class='h4_for_empty'> No admin message yet </h4>";
			 }
			 else
			 {
			while($rowDisplayMessage=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayMessage['id'];
				 $category=$rowDisplayMessage['category'];
				 $description=$rowDisplayMessage['admin_reply'];
				 $created_at=$rowDisplayMessage['created_at'];
?>
 <div class="panel panel-default">
				<ul class="list-group">
				<li class="list-group-item"><?php echo $description; ?></li>
				<li class="list-group-item"><?php echo $category; ?></li>
				<li class="list-group-item"><?php echo $created_at; ?></li>
				</ul>
		</div>
          <p class="all_paragraph"><a href="admin_msg_delete.php?id=<?php echo $id;?>" name="delete" class="btn btn-danger">Delete</a></p>
 
	<?php }
			 }?>
