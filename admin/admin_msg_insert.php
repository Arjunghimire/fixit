<?php  
if(isset($_POST["message"]))
{ 
 if($_POST["message"]=="Message")
 {
        $created_at= date("h:i:a M-d-Y");  
		 $select=$_POST['select'];
		 $admin_reply=$_POST['description'];
		 	
	    include("connectDatabase.php");
        $sqlInsert="insert into admin_reply(id,created_at,category,admin_reply)
	    values(NULL,'$created_at','$select','$admin_reply')";
        $resultInsert=mysql_query($sqlInsert);
		if($resultInsert)
		{
			$sqlSelect="select *from registers where category='$select'";
			$resultSelect=mysql_query($sqlSelect);
			while($rowDisplay=mysql_fetch_array($resultSelect))
			{
				$categoryMess=$rowDisplay['category'];
				$reg_id=$rowDisplay['id'];
				$sqlInsert="insert into admin_msg(id,created_at,category,admin_reply,register_id)
				values(NULL,'$created_at','$select','$admin_reply','$reg_id')";
				$resultInsert=mysql_query($sqlInsert);
			}
			echo "<h4>Message sending success !!!</h4>";
			
		}
		else
		{
			 echo '<h4>Message sending failed!!!</h4>';
		}
		
}
}
?>
