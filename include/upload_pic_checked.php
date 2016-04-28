<?php  
if(isset($_POST["upload"]))
{
	if($_POST["upload"]=="Upload")
	{   
     $image=$_FILES['file']['name'];
     $image1=$_FILES['file']['tmp_name'];

      $image_id =$_SESSION['user_id'];
	 if($image=="")
	 {
		 echo "Please select photo";
	 }
	 else
	 {
	 $move="../images/upload_img/$image";	
	  move_uploaded_file($image1,$move);
	 
	 	include("connectDatabase.php");
    	$sqlInsertUpd="update registers set image='$image' where id='$image_id'";
        $resultInsertUpd=mysql_query($sqlInsertUpd);
			if($resultInsertUpd)
			{
			  echo'<script>alert("Successfully upload your photo");</script>';
			  header("Location: mainpage.php");
			}
			else
			{
				echo '*<b>Failed To Upload Photo.Please Try Again!!!</b>';
			}
	}
  }
}
?>
