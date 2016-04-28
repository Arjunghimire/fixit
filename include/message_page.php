		<?php
		    $user_id=$_SESSION['user_id'];
			require_once("connectDatabase.php");
			$sqlQueryMessage="select * from messagepro where id_pro='$user_id' order by id desc limit 0,1";
			$resultSelectMessage= mysql_query($sqlQueryMessage);
            $number_message = mysql_num_rows($resultSelectMessage);
			 ?>
			 <?php
			 if($number_message=='0')
			 {
				 echo "<h4 class='h4_for_empty'> No Messages Yet </h4>";
			 }
			 else
			 {
			while($rowDisplayMessage=mysql_fetch_array($resultSelectMessage))
			{
				 $fullname=$rowDisplayMessage['fullname'];
				 $address=$rowDisplayMessage['address'];
				 $category=$rowDisplayMessage['category'];
				 $description=$rowDisplayMessage['description'];
				 $created_at=$rowDisplayMessage['created_at'];
?>

			<ul class="list-group">
				<li class="list-group-item"><?php echo $fullname; ?></li>
				<li class="list-group-item"><?php echo $address; ?></li>
				<li class="list-group-item"> <?php echo $category; ?></li>
				<li class="list-group-item"> <?php echo substr($description,0,50)."..."; ?></li>
				<li class="list-group-item"> Posted at <?php echo $created_at; ?></li>
		</ul>

	<?php }
			 }?>
