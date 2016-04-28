<?php 
if(isset($_POST['upload']))
    {
	 if($_POST["upload"]=="Upload")
	 {
		  $created_at= date("h:i:a M-d-Y");  
   		  $image=$_FILES['file']['name'];
		  $image1=$_FILES['file']['tmp_name'];	
		  if($image=="")
		 {
			 echo 'Please upload image !!!';
		 }
	    else
			 {
			    $move="../images/adv_img/$image";	
	            move_uploaded_file($image1,$move);

			include("connectDatabase.php");
    	$sqlInsertAdv="insert into advertisment(id,created_at,image) values(NULL,'$created_at','$image')";
        $resultInsertAdv=mysql_query($sqlInsertAdv);
		if($resultInsertAdv)
		{
			echo'Successfully upload photo';
			
		}
		else
		{
			echo 'Failed operation !!!';
		}
	 }	

  }
}
	 
	 ?>