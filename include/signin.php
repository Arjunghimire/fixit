<?php
session_start();
if(isset($_SESSION['user_id'])){
   header("Location: mainpage.php");
   exit();
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Fixit</title>
	<link href="../css/main_page/bootstrap.css" rel="stylesheet" />
	<link href="../css/main_page/mainpage.css" rel="stylesheet" />
</head>
<body>


<nav class='navbar navbar-inverse'>
	<div class='container'>
	 <ul class='nav navbar-nav'>
		<li><a href="index.php" style="color:#FFFFFF;">Fixit</a></li>
		<li><a href="aboutus.php">About Us</a></li>
		<li><a href="postproblem.php">Post Problem</a></li>
		<li class="active"><a href="signin.php">Sign In</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	    <h2>About Login Information</h2>
	  	 <p>
       		 Please be advised, there are few things we need to clarify before you could register to us.
        	 You are requested to go through the following points to be kept in mind so as to work with us in a convenient manner.	
		</p>
		<ul class="list-group">
				<li class="list-group-item">Only the working professionals with decent work-experience in their respective fields
            may apply for registration in our "Sign-in" section.</li>
				<li class="list-group-item"> The application of the professionals will be handled and
          responded by the administrator in appropriate manner.</li>
				<li class="list-group-item"> The intensely personal information of the registered
           professionals are not flashed on front end of our site.</li>
		</ul>
<hr />
</div>
<div class="container">
	 	 <h2>Login with your account </h2>
		 <?php include("signin_form.php"); ?>
	  <hr />
	     <h2>Create new account</h2>
		 <h3>Information about creating new account</h3>
		 <p>Any service providing professionals with a decent amount 
        of experience in their respective work-area may sign-up to our site.
         The professionals need to fill out few vital information about them 
         along with their prominent profile picture. They might also be requested
          for their CV for reference by the administrator. Note that your registration
           request will be processed by the admin and only upon their approval
            will your profile be reflected on our portal.    
			</p> 
      <hr />
   		 <?php include("register_form.php"); ?>
</div>   
 <hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>
 
 
 
 
</body>
</html>
