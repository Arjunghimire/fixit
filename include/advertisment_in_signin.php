<div class="div_for_advertisment">
		<?php
			require_once("connectDatabase.php");
			$sqlQueryMessage="select *from advertisment order by id desc limit 3,9";
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
          <img class='advertisment_img' src="../images/adv_img/<?php echo $image;?>"/>
	    
	<?php }
		 }?>       
</div>