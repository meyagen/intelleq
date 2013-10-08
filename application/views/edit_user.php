<h2>Settings</h2>
<fieldset>
  <legend>Edit User Info</legend>
<div class="row">
  <div class="large-12 columns">
  <?php echo form_open('settings/edit');?>
  <form>
    <label>First Name</label>
    <?php
      echo '<input type="text" id="new_first_name" name="new_first_name" value="';
      echo $this->session->userdata('fname');
      echo '">';
    ?>
  </div>
  <div class="large-12 columns">
    <label>Last Name</label>
    <?php
      echo '<input type="text" id="new_last_name" name="new_last_name" value="';
      echo $this->session->userdata('lname');
      echo '">';
    ?>
    </div>
  <div class="large-12 columns">
  <label>Username</label>
  <?php
      echo '<input type="text" id="new_username" name="new_username" value="';
      echo $this->session->userdata('username');
      echo '">';
  ?>
  </div>
<div class="large-12 columns">
  <label>Password</label>
  <input type="password" id="new_password" name="new_password" placeholder="Enter new password">
</div>
<div class="large-12 columns">
  <label>Email</label>
  <?php
      echo '<input type="text" id="new_email" name="new_email" value="';
      echo $this->session->userdata('email');
      echo '">';
  ?>
</div>

<div class="row">
<div class="push-8">
  <input type="submit" name="Change" class="button radius success">
  <?php echo form_close();?>
  </form>
  <?php echo form_open('settings/deactivate');?>
  <form>
  <input type="submit" name="DeactivateAccount" class="button radius success">
  <?php echo form_close();?>
  </form>
</div>
</div>
</fieldset>