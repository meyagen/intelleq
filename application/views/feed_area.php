<?php $this->load->view('components/page_head'); ?>
<body class="off-canvas hide-extras">
<?php
	if($loggedin>0){
		$this->load->view('includes/header');
	}
	else {
		$this->load->view('includes/header2');
	}
?>
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
      <div class="large-4 columns">
        <div class="pic hide-for-small" id="bigLogo" style="padding-top:183px;padding-bottom:183px;"></div>
        <div class="pic hide-for-medium-up" id="bigLogo" style="padding-top:147px;padding-bottom:147px;background-size:213px 294px;"></div>
      </div>
      <div class="large-7 push-1 columns">
        <div class="row hide-for-small" style="padding-top:80px"></div>
        <h1>Our Mission</h1>
        <p class="sub" style="padding-top:25px;padding-bottom:50px;" text-alignment="justify">
        	To bring out the excellence of every student by preparing them to better
        	and training them to be greater.
        </p>
      </div>
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
    </div>

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>