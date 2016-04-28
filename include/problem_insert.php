<?php  
if(isset($_POST["post"]))
{ 
 if($_POST["post"]=="Post")
 {
        $created_at= date("h:i:a M-d-Y");  
	     $fullname=$_POST['fullname'];
	     $address=$_POST['address'];
		  $con_number=$_POST['con_number'];
		  $category=$_POST['select'];
		 $description=$_POST['description'];
		 $status="No";
		 $length_con_numebr=strlen($con_number);
		 if($fullname=="" || $address=="" || $con_number=="" || $category=="" || $description=="")
		 {
		  echo '<h4 class="notify_me"> Fill the all form !!!</h4> ';
		  }
		  else if(!preg_match('/^[0-9]*$/', $con_number))
		   {
           echo '<h4 class="notify_me"> Number should be digits.Please try again !!! </h4>';       
          }
		 else if($length_con_numebr< 9)
		 {
		  echo '<h4 class="notify_me"> Number should be more than 9 digits.Please try again!!!</h4>';
		 }
		 else
		 {
		 	 
	    include("connectDatabase.php");
        $sqlInsert="insert into problem(id,created_at,fullname,address,con_number,category,description,status)
	    values(NULL,'$created_at','$fullname','$address','$con_number','$category','$description','$status')";
        $resultInsert=mysql_query($sqlInsert);
			if($resultInsert)
			{
				$sqlSelect="select *from registers where category='$category'";
				$resultSelect=mysql_query($sqlSelect);
				while($rowDisplay=mysql_fetch_array($resultSelect))
				{
					$categoryMess=$rowDisplay['category'];
					$idPro=$rowDisplay['id'];
					$sqlInsert="insert into messagepro(id,created_at,fullname,address,con_number,category,description,id_pro)
					values(NULL,'$created_at','$fullname','$address','$con_number','$category','$description','$idPro')";
					$resultInsert=mysql_query($sqlInsert);
					
							
				}
					 echo '<script>alert("Successfully posted your problem!!!");</script>';
			
			}
			else
			{
				 echo '<h4 class="notify_me"> Failed to post your problem.Please try again!!!</h4>';
			}
			
}
}
}
?>
