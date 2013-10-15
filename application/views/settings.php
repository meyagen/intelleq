<body class="off-canvas hide-extras">
<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<script>
    $('#nav_settings').addClass('active');
  </script>
	<div class="large-6 columns">
		<h2>Settings</h2>
		<fieldset>
		    <legend>Edit User Info</legend>
		    <?php echo form_open('settings/edit',array('style' => 'margin-bottom:0px'));?>
			    <div class="large-12 columns">
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
			    <div class="large-4 push-8 columns">
			      <input type="submit" name="Change" style="margin-bottom:10px;margin-top:15px" class="button radius success expand">
			  	</div>
			  </div>
		    <?php echo form_close();?>

		    <?php echo form_open('settings/deactivate',array('style' => 'margin-bottom:0px'));?>
			    <div class="row">
			    	<div class="large-4 push-8 columns">
			      		<input type="submit" name="DeactivateAccount" class="button radius alert expand"value="Deactivate Account">
			  		</div>
			  	</div>
		    <?php echo form_close();?>
		</fieldset>
	</div>
</div>
<?php $this->load->view('includes/footer');?>