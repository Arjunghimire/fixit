
<h3>Change Registration Status</h3>
<br />
<div class="display_status_not"></div>
        <label>Register</label>
        <input type="radio"  name="radio" value="Yes" />
        <label>Unregister</label>
        <input type="radio" name="radio" value="No" />
        <br />
        <br />
        <input type="hidden" value="<?php echo $_GET['id'];?>" id="hidden_id" />
       <p><input type="submit" id="change" value="Change"></p>
