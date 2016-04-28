		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from admin_reply order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			 <?php
			 if($number=='0')
			 {
				 echo "<h4> No Admin Reply</h4>";
			 }
			 else
			 {
				 ?>
				 <h3>All admin reply are here</h3>
				 <p>All admin reply (<?php echo $number;?>)</p>
				  <div class="table-responsive">
					<table class="table">
					<thead>
					<tr>
                  <th>ID</th>
                  <th>Admin Reply</th>
                  <th>Category</th>
                  <th>Posted at</th>
                  <th>Option</th>
					</tr>
		                        
                 <?php 
			while($rowDisplayMessage=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayMessage['id'];
				 $admin_reply=$rowDisplayMessage['admin_reply'];
				 $category=$rowDisplayMessage['category'];
				 $created_at=$rowDisplayMessage['created_at'];
?>
			</thead>
			<tbody>
		<tr>    
 		<td><?php echo $id;?></td>
             <td> <?php echo $admin_reply; ?> </td>
         <td> <?php echo $category; ?></td>
          <td> <?php echo $created_at; ?></td>
            <td>  
            <a  href="delete_admin_reply.php?id=<?php echo $id;?>" class="btn btn-danger"> Delete </a> </td>          
	    
	<?php }
			 }?>
             </tr>
					</tbody>
					</table>
					</div>
