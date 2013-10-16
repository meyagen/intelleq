<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras" style="margin-top:45px">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
  <div class="row">
  	<div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
  	  <div class="white">
      <div class"large-7 push-4 columns">
       	<h1 class="white">Send us a Feedback</h1>
        <p class="sub">
			Intelleq would love to hear from you. So tell us about more by filling out this form below. 
			We don't respond but we take time to read your feedbacks.
        </p>
              </div>
     </div>
	<div class="large-10 push-1 columns">
	<fieldset>
	<form id="formFeedback">
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Name</label>
				<input type="text" name="user" class="text" placeholder="First Name Last Name" required/>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label class="white">E-mail Address</label>
				<input type="email" name="email" class="text" placeholder="Enter valid mail" required>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Subject</label>
				<input type="text" name="subject" class="text" size="10"placeholder="Subject" required>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Comment</label>
				<textarea name="message" cols="50" rows="50" tabindex="101" data-min-length="" required placeholder="Feedback message"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="large-2 push-9">
				<input type="submit" value="Send Report" name="report" class="button radius success expand">
			</div>
		</div>
	</form>
	</fieldset>
	</div>
</div>

<!--Modal - Confirmation-->
<div id="modalConfirm" class="reveal-modal small">
    <h2>Your feedback is sent!</h2>
    <p>Thank you for sharing.</p>
  <a class="close-reveal-modal">x</a>
</div>
<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>