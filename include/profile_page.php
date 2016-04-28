     <h3>Profile</h3>
		<?php
		    $id=$_SESSION['user_id'];
			require_once("connectDatabase.php");
			$sqlQueryProfile="select *from registers where id='$id'";
			$resultSelectProfile=mysql_query($sqlQueryProfile);
			$rowDisplayProfile=mysql_fetch_array($resultSelectProfile);
				 $firstname=$rowDisplayProfile['firstname'];
				 $lastname=$rowDisplayProfile['lastname'];
				 $address=$rowDisplayProfile['address'];
	             $username=$rowDisplayProfile['username'];
				 $con_number=$rowDisplayProfile['con_number'];
				 $category=$rowDisplayProfile['category'];
				 $image=$rowDisplayProfile['image'];
				 $created_at=$rowDisplayProfile['created_at'];
?>	
							
			<ul class="list-group">
				<li class="list-group-item"><img src="../images/upload_img/<?php echo $image; ?>" width="35%" height="30%">	</li>
				<li class="list-group-item">Fullname &raquo; <?php echo $firstname." ".$lastname; ?></li>
				<li class="list-group-item">Address &raquo; <?php echo $address; ?></li>
				<li class="list-group-item">Username &raquo; <?php echo $username; ?></li>
				<li class="list-group-item">Address &raquo; <?php echo $address; ?></li>
				<li class="list-group-item">Contact Number &raquo; <?php echo $con_number; ?></li>
				<li class="list-group-item">Category &raquo; <?php echo $category; ?></li>
				<li class="list-group-item">Account registration Date &raquo; <?php echo $created_at; ?></li>
		</ul>