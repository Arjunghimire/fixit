    <h2>Post new problem</h2>

	<?php include("problem_insert.php");?>
	<form class="form-horizontal" role="form" action="postproblem.php" method="post">
	<div class="form-group">
	  <label for="firstname" class="col-sm-2 control-label">Fullname</label>
		<div class="col-sm-10">
	 	<input type="text" class="form-control" name="fullname" placeholder="Fullname">
        </div>
    </div>
	<div class="form-group">
	  <label for="firstname" class="col-sm-2 control-label">Address</label>
		<div class="col-sm-10">
	 	<input type="text" class="form-control" name="address" placeholder="Address">
        </div>
    </div>
	<div class="form-group">
	  <label for="firstname" class="col-sm-2 control-label">Contact Number</label>
		<div class="col-sm-10">
	 	<input type="text" class="form-control" name="con_number" placeholder="Contact Number" maxlength="10">
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
		<label class="col-sm-2 control-label">Descritpion</label>
		<div class="col-sm-10">
		<textarea class="form-control" rows="3" name="description"></textarea>
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-default" value="Post" name="post" />
		</div>
	</div>
</form>