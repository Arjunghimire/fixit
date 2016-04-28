
<?php
 if(isset($_POST['login']))
 {
	 if($_POST["login"]=="Log In")
	 {
	      $username=$_POST["username"];
		  $password=$_POST["password"];
		 if($username=="" || $password=="")
		 {
			 echo '<h4 class="notify_me"> Please fill username and password !!!</h4>';
		 }
	    else
			 {
				include("connectDatabase.php");
				$sqlQue="select * from registers where username='$username' and password='$password' and status='Yes'";
				$resultSea=mysql_query($sqlQue);
				$rowSea=mysql_fetch_array($resultSea);
				$checkQuery=mysql_num_rows($resultSea);
					if($checkQuery == 1)
					 {    
					
						 $_SESSION['user_id'] = $rowSea['id'];
						 $_SESSION['user_first_name'] = $rowSea['firstname'];
						 $_SESSION['user_last_name'] = $rowSea['lastname'];
						 $_SESSION['user_cat'] = $rowSea['category'];
						 header("Location: mainpage.php");
						 exit();
					  }
					  else
				      {
				      echo '<h4 class="notify_me"> Username or password incorrect !!!</h4>';
				      }
			 }
	
	 }
 }

?>