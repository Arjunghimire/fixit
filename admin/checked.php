
<?php
 if(isset($_POST['login']))
 {
	 if($_POST["login"]=="Log In")
	 {
	      $username=$_POST["username"];
		  $password=$_POST["password"];
		 if($username=="" || $password=="")
		 {
			 echo '<h4 class="notify_me">Please enter username and password !!!</h4>';
		 }
	    else
			 {
				include("connectDatabase.php");
				$sqlQue="select * from admin_register where username='$username' and password='$password'";
				$resultSea=mysql_query($sqlQue);
				$rowSea=mysql_fetch_array($resultSea);
				$checkQuery=mysql_num_rows($resultSea);
					if($checkQuery == 1)
					 {    
					
						 $_SESSION['user_id_admin'] = $rowSea['id'];
						 $_SESSION['user_first_name_admin'] = $rowSea['firstname'];
						 $_SESSION['user_last_name_admin'] = $rowSea['lastname'];
						 header("Location: mainpage_admin.php");
						 exit();
					  }
					  else
				      {
				      echo '<h4 class="notify_me">Username or password incorrect !!!</h4> ';
				      }
			 }
	
	 }
 }

?>