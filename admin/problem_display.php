		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from problem order by id desc ";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 ?>
			 <?php
			 if($number=='0')
			 {
				 echo "<h4> No Post Yet </h4>";
			 }
			 else
			 {
				 ?>
				 <h5>All Posts (<?php echo $number;?>)</h5>

				 <div class="table-responsive">
					<table class="table">
					<thead>
					<tr>
                   <th>ID</th>
                   <th>Full Name</th>
                   <th>Address</th>
                   <th>Contact Number</th>
                   <th>Category</th>
                   <th>Post valid</th>
                   <th>Posted at</th>
                   <th>Option</th>
					</tr>
					
					
                 <?php 
			while($rowDisplayMessage=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayMessage['id'];
				 $fullname=$rowDisplayMessage['fullname'];
				 $address=$rowDisplayMessage['address'];
				 $con_number=$rowDisplayMessage['con_number'];
				 $category=$rowDisplayMessage['category'];
				 $status=$rowDisplayMessage['status'];
				 $created_at=$rowDisplayMessage['created_at'];
?>
				</thead>
					<tbody>
					<tr>
        <td><?php echo $id;?></td>
			<td> <?php echo $fullname ?></td>
            <td> <?php echo $address; ?> </td>
             <td> <?php echo $con_number; ?> </td>
         <td> <?php echo $category; ?></td>
         <td> <?php echo $status; ?></td>
          <td> <?php echo $created_at; ?></td>
            <td> <a  href="problem_view_details.php?id=<?php echo $id;?>" class="btn btn-info"> View </a> 
            <a  href="delete_problem.php?id=<?php echo $id;?>" class="btn btn-danger"> Delete </a> </td>          
	    
	<?php }
			 }?>
            </tr>
					</tbody>
					</table>
					</div>