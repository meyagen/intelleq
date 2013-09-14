<h2>Settings</h2>
<fieldset>
  <legend>Edit User Info</legend>
<div class="row">
  <div class="large-12 columns">
  <?php echo form_open('settings/edit');?>
  <form>
    <label>First Name</label>
    <input type="text" id="new_first_name" name="new_first_name" placeholder="Enter first name">
  </div>
  <div class="large-12 columns">
    <label>Last Name</label>
    <input type="text" id="new_last_name" name="new_last_name" placeholder="Enter last name">
  </div>
  <div class="large-12 columns">
  <label>Username</label>
  <input type="text" id="new_username" name="new_username" placeholder="Enter desired username">
</div>
<div class="large-12 columns">
  <label>Password</label>
  <input type="password" id="new_password" name="new_password" placeholder="Password">
</div>
<div class="large-12 columns">
  <label>Email</label>
  <input type="text" id="new_email" name="new_email" placeholder="Enter new email.">
</div>
</fieldset>

<div class="row">
<div class="push-8">
  <input type="submit" name="Change" class="button radius success">
  <?php echo form_close();?>
  </form>
  <?php echo form_open('settings/deactivate');?>
  <form>
  <input type="submit" name="Deactivate Account" class="button radius success">
  <?php echo form_close();?>
  </form>

</div>
</div>
<a class="close-reveal-modal">x</a>
