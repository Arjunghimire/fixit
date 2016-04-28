
<?php
session_start();
if(isset($_SESSION['user_id_admin'])){
   header("Location: mainpage_admin.php");
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
			<li><a href="mainpage_admin.php">All Post</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="advertisment.php">Advertisment</a></li>
			<li><a href="admin_reply.php">Admin Reply</a></li>
			<li><a href="admin_account.php">Admin Account</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	  <h2> Admin login Page</h2>
       	<p>
           The company's officials need to login here to control the overall database.
		</p>
       <?php include("signin_form.php");?>
</div>
<hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>


</body>
</html>
