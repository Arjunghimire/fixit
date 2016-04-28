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
		<li class="active"><a href="aboutus.php">About Us</a></li>
		<li><a href="postproblem.php">Post Problem</a></li>
		<li><a href="signin.php">Sign In</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>About Us</h2>
    <p>
        Our name "Fix-It" itself explains in brief about what we do.
        We are basically a group of young enthusiasts established
         with the motto of providing services against daily household 
         problems through digital technology. We aim to enable our customers
         to get smarter by utilizing our modern approach to solve domestic problems.
         We are established with our head office at Bhalwari, just beside Lumbini Engineering, 
        Management and Science College. We basically coordinate the professionals 
         with the domestic service seekers to get their job done and in return take 
         certain charges as per the service.	
    </p>
</div>

<div class='container'>
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-md-8'>
		<h1 class='first_header'>Contact Us</h1>
		<address>
		<strong>Fixit Company, Inc.</strong><br>
		Bhalwari, Rupandehi  289281<br>
		<abbr title="Phone">Phone Number:</abbr> (977) 071-693665
		</address>
		<address>
		<strong>Email Us</strong><br>
		<a href="mailto:#">fixitcompany123@gmail.com</a>
		</address>
		</div>
<div class='col-xs-6 col-md-4'>
	<div class='panel panel-info'>
	<div class='panel-heading'>
	<h3 class='panel-title'>Follow Us</h3>
	</div>
    <div class='panel-body'><a href="https://www.facebook.com/Fixit-542899199211414/">Facebook</a></div>
	<div class='panel-body'><a href="http://www.twitter.com">Twitter</a></div>
	<div class='panel-body'><a href="http://www.googleplus.com">Google Plus</a></div>
   </div>
   </div>
  </div>
 </div>

<div class="container">
  <h3>Google Map </h3>
   <div class='col-xs-12 col-sm-6 col-md-8'>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14142.418637919018!2d83.45950571048115!3d27.60578387661156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399684de6cfc1e5b%3A0x4429b4fba889a39f!2sLumbini+Engineering+Campus%2C+Tilottama+Municipality+32903%2C+Nepal!5e0!3m2!1sen!2snp!4v1461135623012" width="100%" height="40%" frameborder="0" style="border:0" allowfullscreen></iframe>
		
	</div> 
</div>
<hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>



</body>
</html>
