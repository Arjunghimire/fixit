
<?php
 if(isset($_POST['change']))
 {	
	      $status=$_POST["status"];
		 $hidden_id=$_POST["hidden_id"];		
		 if($status==false)
		 {
			 echo 'Please checked any radio button !!!';
		 }
	    else
			 {
				include("connectDatabase.php");
				$sqlQ="update problem set status='$status' where id='$hidden_id'";
				$resultS=mysql_query($sqlQ);
			 }
	
	 
 }

?>