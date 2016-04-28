    <h2>Register</h2>
   <?php include("register_checked.php")?>	
    <form action="admin_account.php" method="post" class="form-horizontal">
				<div class="form-group">
				<label  class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="firstname"
				placeholder="First Name">
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="lastname"
				placeholder="Last Name">
				</div>
				</div>
				<div class="form-group">
				<label  class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="username"
				placeholder="Username">
				</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				<input type="password" class="form-control" name="password"
				placeholder="Password">
				</div>
				</div>
				<div class="form-group">
				<label  class="col-sm-2 control-label">Address</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="address"
				placeholder="Address">
				</div>
				</div>
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-default" value="Register" name="register"  />
				</div>
				</div>
		</form>
