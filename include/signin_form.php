
     <?php  include("checked.php");?>
	 <form class="form-horizontal" role="form" action="signin.php" method="post">
		<div class="form-group">
		<label  class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
		<input type="text" class="form-control" name="username"
		placeholder="Username" maxlength="20">
		</div>
		</div>
		<div class="form-group">
		<label class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" name="password"
		placeholder="Password" maxlength="20">
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<div class="checkbox">
		<label>
		<input type="checkbox"> Remember me
		</label>
		</div>
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-default" name="login" value="Log In"/>
		</div>
		</div>
  </form>
	 
