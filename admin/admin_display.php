		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from admin_register order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			  <p>Admin Account (<?php echo $number;?>) </p>
			 <?php
			 if($number=='0')
			 {
				 echo "<h4> No Registration Yet </h4>";
			 }
			 else
			 {
				 ?>
				  <div class="table-responsive">
					<table class="table">
					<thead>
					<tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Address</th>
                  <th>Username</th>
                  <th>Posted at</th>
                  <th>Option</th>
					</tr>
                 <?php 
			while($rowDisplayRegistration=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayRegistration['id'];
				 $firstname=$rowDisplayRegistration['firstname'];
				 $lastname=$rowDisplayRegistration['lastname'];
				 $address=$rowDisplayRegistration['address'];
				 $username=$rowDisplayRegistration['username'];
				 $created_at=$rowDisplayRegistration['created_at'];
?>
			</thead>
					<tbody>
		<tr>     
		<td><?php echo $id;?></td>
			<td> <?php echo $firstname ?></td>
			<td> <?php echo $lastname ?></td>
			<td> <?php echo $address ?></td>
             <td> <?php echo $username; ?> </td>
          <td> <?php echo $created_at; ?></td>
           <td> <a href="delete_account.php?id=<?php echo $id;?>" class="btn btn-danger"> Delete </a> </td>          
	    
	<?php }
			 }?>
            </tr>
					</tbody>
					</table>
</div>
