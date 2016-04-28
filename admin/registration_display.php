		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from registers order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			  <h5">All Registration (<?php echo $number;?>) </h5>
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
                  <th>Contact Number</th>
                  <th>Category</th>
                  <th>Registered Account</th>
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
				 $password=$rowDisplayRegistration['password'];
				 $con_number=$rowDisplayRegistration['con_number'];
				 $category=$rowDisplayRegistration['category'];
				 $status=$rowDisplayRegistration['status'];
				 $created_at=$rowDisplayRegistration['created_at'];
				 $image=$rowDisplayRegistration['image'];
?>         
      </thead>
	    <tbody>
	    <tr> 
 		    <td><?php echo $id;?></td>
			<td> <?php echo $firstname ?></td>
			<td> <?php echo $lastname ?></td>
			<td> <?php echo $address ?></td>
             <td> <?php echo $con_number; ?> </td>
         <td> <?php echo $category; ?></td>
         <td> <?php echo $status; ?></td>
          <td> <?php echo $created_at; ?></td>
            <td><a href="registration_full_view.php?id=<?php echo $id;?>" class="btn btn-info"> View </a>
            <a href="delete_registration.php?id=<?php echo $id;?>" class="btn btn-danger"> Delete </a> </td>          
	    
	<?php }
			 }?>
              </tr>
					</tbody>
					</table>
					</div>