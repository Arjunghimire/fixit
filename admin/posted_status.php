
<h3>Change Post Status</h3>
<br />
<div class="display_status_not"></div>
        <label>Valid</label>
        <input type="radio"  name="radio" value="Yes" />
        <label>Unvalid</label>
        <input type="radio" name="radio" value="No" />
        <br />
        <br />
        <input type="hidden" value="<?php echo $_GET['id'];?>" id="hidden_id" />
       <p><input type="submit" id="change" value="Change"></p>
