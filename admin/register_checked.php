
<?php
 if(isset($_POST['register']))
    {
	 if($_POST["register"]=="Register")
	 {
          $created_at= date("h:i:a M-d-Y");  
	      $firstname=$_POST["firstname"];
		  $lastname=$_POST["lastname"];
		  $address=$_POST["address"];
	      $username=$_POST["username"];
		  $password=$_POST["password"];
		  $length_name=strlen($username);
		  $length_password=strlen($password);
		  if($firstname=="" || $lastname=="" || $address=="" || $username=="" || $password=="")
		  {
		     echo '<h4 class="notify_me">Please fill all the form !!!</h4> ';
			 
		  }
		   else if ($length_name < 5 || $length_password < 5 )
		 {
		     echo '<h4 class="notify_me">Username and password should be more than 5 character !!!</h4>';
		 }
		 else
		 {
				include("connectDatabase.php");
				$sqlSel="select username from admin_register where username ='$username'";
				$resultSel=mysql_query($sqlSel);
				  $row=mysql_num_rows($resultSel);
					 if($row==1)
					 {
						 echo "<h4 class='notify_me'>Username already exits!!!</h4>";
					 }
					 else
					 {
					include("connectDatabase.php");
			$sqlInsertRegister="insert into admin_register(id,created_at,firstname,lastname,address,username,password)
			  values(NULL,'$created_at','$firstname','$lastname','$address','$username','$password')";
				$resultInsertRegister=mysql_query($sqlInsertRegister);
							if($resultInsertRegister)
							{
								echo'<h4 class="notify_me">Successfully registered your account.Thank you!!!</h4>';
								
							}
							else
							{
								echo '<h4 class="notify_me">Failed to post your problem.Please try again!!!</h4>';
							}
			
					 }
	
	}

}
}
?>