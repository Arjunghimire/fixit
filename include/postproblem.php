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
		<li class="active"><a href="postproblem.php">Post Problem</a></li>
		<li><a href="signin.php">Sign In</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h2>Post your problem in form below</h2>
    <p>
                This is where anybody who seeks any sort of domestic service can put out their problem.
                 You are requested to choose any category as per the nature of service you need in order to post your problems.
                  Once our customers post their problems, we will send the suitable
                   professional service at your door according to your locality.
                    We hope you will cooperate well with us so that we may work together in excellent manner.		
    </p>
</div>

<div class='container'>
	<div class='row'>
		<div class='col-xs-12 col-sm-6 col-md-8'>
      <h4>Your problem will be posted in a while after admin approval !!!</h4> 
          <?php include("post_form.php");?>
		</div>
<div class='col-xs-6 col-md-4'>
	<div class='panel panel-success'>
	<div class='panel-heading'>
	<h3 class='panel-title'>Advertisments</h3>
	</div>
    <div class='panel-body'>
	    <?php include("advertisment.php");?>
	</div>
   </div>
   </div>
  </div>
  <hr />
</div>


 <div class="container">
   <?php include("problem_display.php"); ?>
</div>


<hr />
<!-- Footer -->
<div class="container">
   <?php include("footerdiv.php");?>
</div>

</body>
</html>
