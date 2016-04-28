		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from advertisment order by id desc limit 0,2";
			$resultSelectMessage=mysql_query($sqlQueryMessage);
             $number =mysql_num_rows($resultSelectMessage);
			 if($number=='0')
			 {
				 echo "<h4>No Advertisment</h4>";
			 }
			 else
			 {
				
			while($rowDisplayRegistration=mysql_fetch_array($resultSelectMessage))
			{
				 $id=$rowDisplayRegistration['id'];
				 $created_at=$rowDisplayRegistration['created_at'];
				 $image=$rowDisplayRegistration['image'];
?>
	      <img src="../images/adv_img/<?php echo $image;?>" width="100%" height="30%"/>
		  <hr />
	    
	<?php }
		 }?>       
