
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
		<li><a href="signin.php">Sign In</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Welcome Everybody</h2>
    <p>
        We are established to provide an online solution to your every domestic problem.
        When you require any paid service at your home in case of necessities, we are here to help you.
        Basically we manage and send the appropriate service providing personnel to your doors upon your requests.
        Our major objective is to reduce your manual labor of searching for various professionals to fix your household problems.
        Additionally, we also provide you with the contact information and locality of the nearest point
        of sales of various household items you would need in your daily life (like stores and service points).	
    </p>
</div>

<div class="container">
 <h2>Our services</h2>
   <div class="row">
    <div class="col-sm-6 col-md-3">
		<div class="thumbnail">
		<img src="../images/page_img/plumber.jpg" alt="Plumber">
        </div>
	 <div class="caption">
		<h3>Plumber</h3>
		<p>They are to provide you with services regarding the water pipes/supply to your home.</p>
    </div>
   </div>

    <div class="col-sm-6 col-md-3">
		<div class="thumbnail">
		<img src="../images/page_img/elctrician.jpg" alt="Electrician">
    </div>
	<div class="caption">
		<h3>Electrician</h3>
		<p>These professionals provide you with services related to household electrical and electronics.</p>
   </div>
   </div>
    <div class="col-sm-6 col-md-3">
		<div class="thumbnail">
		<img src="../images/page_img/mechanic.jpg" alt="Automechanic">
    </div>
	<div class="caption">
		<h3>Auto Mechanic</h3>
		<p>They provide you with services related to your machineries along with motor vehicles.</p>
   </div>
  </div>

     <div class="col-sm-6 col-md-3">
		<div class="thumbnail">
		<img src="../images/page_img/slide03.png" alt="Contractor">
     </div>
	<div class="caption">
		<h3>Contractor</h3>
		 <p>They help you with construction purposes for your home, offices,enterprises,etc.</p>
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
