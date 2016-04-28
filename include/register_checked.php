
<?php
 if(isset($_POST['register']))
    {
	 if($_POST["register"]=="Register")
	 {
          $created_at=date("h:i:a M-d-Y");  
	      $firstname=$_POST["firstname"];
		  $lastname=$_POST["lastname"];
		  $address=$_POST["address"];
	      $username=$_POST["username"];
		  $password=$_POST["password"];
	      $con_number=$_POST["con_number"];
		  $select=$_POST["select"];
		  $status="No";
		  $image="";
		  include("connectDatabase.php");
		  $length_con_numebr=strlen($con_number);	 
		  $length_name=strlen($username);
		  $length_password=strlen($password);
		  
		   if($firstname=="" || $lastname=="" || $address=="" || $username=="" || $password=="" || $con_number=="" || $select=="")
		  {
		  echo '<h4 class="notify_me"> Please fill all the form !!!</h4>';
		  }
		 else if(!preg_match('/^[0-9]*$/', $con_number)) {
		   echo '<h4 class="notify_me"> Number should be digits.Please Try Again!!!</h4>';       
			 }
		  else if($length_con_numebr < 9)
	       {
		  echo '<h4 class="notify_me"> Number should be more than 9 digits.Please Try Again!!!</h4>';
		  }
		  else
		  {
		   if($length_name < 5 && $length_password < 5 )
			 {
		     echo '<h4 class="notify_me">Username and password should be more than 5 character !!!</h4>';
					
				}
				 
				 else
				 {
				 include("connectDatabase.php");
					$sqlSel="select username from registers where username ='$username'";
					$resultSel=mysql_query($sqlSel);
					  $row=mysql_num_rows($resultSel);
					 if($row==1)
					 {
						 echo '<h4 class="notify_me"> Username already exits!!!</h4>';
					 }
					 else
					 {
		
	   $sqlInsertRegister="insert into registers(id,created_at,firstname,lastname,address,username,password,con_number,category,status,image)
	  values(NULL,'$created_at','$firstname','$lastname','$address','$username','$password','$con_number','$select','$status','$image')";
        $resultInsertRegister=mysql_query($sqlInsertRegister);
				if($resultInsertRegister)
				{
					echo'<script>alert("Successfully registered your acount.You will get message after activation of your account");</script>';
				}
				else
				{
					echo '<h4 class="notify_me"> Failed to register your acount.Please Try Again!!!</h4>';
				}
			}
			}
	 }
 }
}

?>