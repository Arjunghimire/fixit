 
   <?php include("register_checked.php")?>	
   
		   <form class="form-horizontal" role="form" action="signin.php" method="post">
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
				<label class="col-sm-2 control-label">Contact Number</label>
				<div class="col-sm-10">
				<input type="text" class="form-control" name="con_number" maxlength="10"
				placeholder="Contact Number">
				</div>
				</div>
			<div class="form-group">
	  		<label  class="col-sm-2 control-label">Select Category</label>
				<div class="col-sm-10">
			     <select class="form-control" name="select">
		        <option value="">Select Category</option>
			     <option value="Electrician">Electrician</option>
			     <option value="Plumber">Plumber</option>
			     <option value="Mechanic">Mechanic</option>
			     <option value="Contractor">Contractor</option>
			     <option value="Other">Other</option>
				</select>
        	</div>
			</div>	
				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-default" value="Register" name="register"  />
				</div>
				</div>
		</form>

