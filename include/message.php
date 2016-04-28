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
		<li><a href="mainpage.php">Profile</a></li>
		<li class="active"><a href="message.php">Message</a></li>
		<li><a href="adminboard.php">Admin Message</a></li>
 		<li><a href="logout.php">Sign Out</a></li>

    </ul>
  </div>
</nav>
<div class="container">
	    <h2>Message</h2>
	  	 <p>
         Here you'll find all related messages once you are registered to us. 
         Hence you are requested to keep checking up our site regularly.	
		</p>
		<hr />
<?php include("message_full.php");?>
</div>
<hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>



</body>
</html>
