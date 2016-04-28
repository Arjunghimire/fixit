		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from advertisment order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			  <p>All Advertisment (<?php echo $number;?>) </p>
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
                  <th>Posted at</th>
                  <th>Image</th>
                  <th>Option</th>
					</tr>
                 <?php 
			while($rowDisplayRegistration=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayRegistration['id'];
				 $created_at=$rowDisplayRegistration['created_at'];
				 $image=$rowDisplayRegistration['image'];
?>          
				</thead>
					<tbody>
					<tr>
   			<td><?php echo $id;?></td>
          <td> <?php echo $created_at; ?></td>
          <td><img src="../images/adv_img/<?php echo $image;?>" width="30%" height="80%" /></td>
           <td> <a href="delete_advertisment.php?id=<?php echo $id;?>" class="btn btn-danger">Delete</a> </td>          
	    
	<?php }
			 }?>
             </tr>
					</tbody>
					</table>
					</div>