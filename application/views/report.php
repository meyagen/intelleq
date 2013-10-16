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
      <div class"large-8 push-3 columns">
        <h1 class="white">Report a Bug</h1>
        <p class="sub">
			Have you experienced any bugs on our site? 
			Well, you can submit your bug reports here to make our site more efficient and perform better.
        </p>
      </div>
     </div>
	<div class="large-10 push-1 columns">
	<fieldset>
	<form id="formReport">
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Name</label>
				<input type="text" name="user" class="text" required placeholder="First Name Last Name">
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label id="reportEmailLabel" class="white">E-mail Address</label>
				<input type="email" id="reportEmail"name="email_address" class="text" required placeholder="Enter valid mail" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label id="reportSubjectLabel" class="white">Subject</label>
				<input type="text" id="reportSubject"name="subject" class="text" required placeholder="Subject" >
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label class="white">Message</label>
				<textarea name="message" cols="50" rows="50" tabindex="101" data-min-length="" required placeholder="report message"></textarea>
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
    <h2>Your report is sent successfully!</h2>
    <p>Thank you for your help.</p>
  <a class="close-reveal-modal">x</a>
</div>

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>