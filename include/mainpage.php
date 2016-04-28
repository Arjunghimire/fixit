<?php
session_start();
if(!isset($_SESSION['user_id'])){
   header("Location: signin.php");
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
		<li class="active"><a href="mainpage.php">Profile</a></li>
		<li><a href="message.php">Message</a></li>
		<li><a href="adminboard.php">Admin Message</a></li>
 		<li><a href="logout.php">Sign Out</a></li>

    </ul>
  </div>
</nav>
<div class="container">
  <h2>Welcome dear professionals... </h2>
   <p>Welcome to our portal…we are happy to have you visit our site and would
             very much like to help you in solving any sort of household problems in your day to day life. 
            </p>
        <p>
            We are here to help you get in touch with any professionals that helps you fix 
            your everyday domestic problems at home, be it a minor fix or a	comprehensive job.
             We appoint related professionals and send them to your door to help
             you fix your problems upon your request. This implies that the service seekers 
             may simply contact us through this site by posting your problem to us and the 
             service providing professionals need to contact and register to us so that we can 
             link you to the respective service seekers. 
			</p>
			<p>For this we encourage and request both 
             the service seekers and professionals to keep visiting our site regularly.
              Once any professional logs in to the site, the job requirements will be
               regularly posted in his/her profile page under “Admin Board”.
		 </p>
</div>	
<div class="container">	
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-md-8'>
              <h2>Hello <?php echo '('. $_SESSION['user_first_name'].')'; ?></h2>
              <?php include("profile_page.php");?>
		</div>
		<div class='col-xs-6 col-md-4'>
			 <div class='panel panel-info'>
			<div class='panel-heading'>
			<h3 class='panel-title'>Upload/Update Profile Picture</h3>
			</div>
			<div class='panel-body'>
              <?php include("upload_picture.php");?>
			</div>
		  </div>
		  </div>		  
		  
		    <div class='col-xs-6 col-md-4'>
			 <div class='panel panel-danger'>
			<div class='panel-heading'>
			<h3 class='panel-title'>Latest Message</h3>
			</div>
			<div class='panel-body'>
              <?php include("message_page.php");?>
              <a href="message.php" class="more_message">More Message &raquo;</a>
			</div>
		  </div>
		  </div>
		  </div>

</div>
 <hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>
 
</body>
</html>
