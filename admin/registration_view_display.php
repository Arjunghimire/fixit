		<?php
		if(isset($_GET['id']))
      {
        $id=$_GET['id'];
			require_once("connectDatabase.php");
			$sqlQueryRe="select *from registers where id='$id'";
			$resultSelectRe=mysql_query($sqlQueryRe);
			$rowDisplayRe=mysql_fetch_array($resultSelectRe);
		
                 $id=$rowDisplayRe['id'];
				 $firstname=$rowDisplayRe['firstname'];
				 $lastname=$rowDisplayRe['lastname'];
				 $address=$rowDisplayRe['address'];
				 $username=$rowDisplayRe['username'];
				 $password=$rowDisplayRe['password'];
				 $con_number=$rowDisplayRe['con_number'];
				 $category=$rowDisplayRe['category'];
				 $status=$rowDisplayRe['status'];
				 $created_at=$rowDisplayRe['created_at'];
				 $image=$rowDisplayRe['image'];
				 ?>  
		<ul class="list-group">
				<li class="list-group-item"><img src="../images/upload_img/<?php echo $image; ?>" width="20%" height="5%">	</li>
				<li class="list-group-item">Fullname &raquo; <?php echo $firstname." ".$lastname; ?></li>
				<li class="list-group-item">Address &raquo; <?php echo $address; ?></li>
				<li class="list-group-item">Username &raquo; <?php echo $username; ?></li>
				<li class="list-group-item">Address &raquo; <?php echo $address; ?></li>
				<li class="list-group-item">Contact Number &raquo; <?php echo $con_number; ?></li>
				<li class="list-group-item">Category &raquo; <?php echo $category; ?></li>
				<li class="list-group-item">Account registration Date &raquo; <?php echo $created_at; ?></li>
		</ul>
              
                   <a class="btn btn-info" href="registration.php">Back</a>
	<?php }
	  ?>
