		<?php
		if(isset($_GET['id']))
      {
        $id=$_GET['id'];
	      $_SESSSION["post_id"]=$id;
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from problem where id='$id' ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);    
			$rowDisplayMessage=mysql_fetch_array($resultSelectMessage);
			{
				 $id=$rowDisplayMessage['id'];
				 $fullname=$rowDisplayMessage['fullname'];
				 $address=$rowDisplayMessage['address'];
				 $con_number=$rowDisplayMessage['con_number'];
				 $category=$rowDisplayMessage['category'];
				 $description=$rowDisplayMessage['description'];
				 $status=$rowDisplayMessage['status'];
				 $created_at=$rowDisplayMessage['created_at'];
?>     
 			<div class="panel panel-default">
			<div class="list-group-item active"><h4 > <?php echo $fullname ?></h4></div>
				<ul class="list-group">
				<li class="list-group-item"><?php echo $address; ?></li>
				<li class="list-group-item"><?php echo $con_number; ?></li>
				<li class="list-group-item"><?php echo $category; ?></li>
				<li class="list-group-item"><?php echo $description; ?></li>
				<li class="list-group-item">Posted valid:-<?php echo $status; ?></li>
				<li class="list-group-item"><?php echo $created_at; ?></li>
				<li class="list-group-item">Posted at &raquo; <?php echo $created_at; ?></li>
				</ul>
		</div>

         <a href="mainpage_admin.php" class="btn btn-info"> Back</a>
		    
	<?php }
	  }?>
           