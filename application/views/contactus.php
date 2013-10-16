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
<body class="off-canvas hide-extras">
<div class="white">
	<section>
	<div>
    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
    <div class="row">
    <div class="large-12 push-1 columns">
      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
      <div>
        <h1 class="white">Contact Us</h1>
        <p class="sub">
       	<br>
          We want you to build a communication with us! Since we really want to help, here are the different ways on how to get connected to us.
          Feel free to ask any questions regarding the site.
        </p>
      </div>
    </div>
  </div>
    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
  </div>
</section>
	<section>
		  <div>
		    <div class="row hide-for-small"><div class="large-8 columns padding-large"></div></div>
		    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
		    <div class="row">
		    <div class="large-5 push-1 columns">
		      <div class="pic" id="contactImgMail" style="padding-top:100px;padding-bottom:110px;"></div>
		    </div>
		    <div class="large-5 pull-1 columns">
		      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
		      <div>
		        <h2 class="white">Send us E-mails</h2>
		        <p class="description">If you have any questions, email us at intelleq.support@gmail.com</p>
		      </div>
		    </div>
		  </div>
		    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
		    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
		  </div>
	</section>
	<section>
	  <div>
	    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
	    <div class="row">
	    <div class="large-5 push-6 columns">
	      <div class="pic" id="contactImgFb" style="padding-top:100px;padding-bottom:100px;"></div>
	    </div>
	    <div class="large-5 pull-6 columns">
	      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
	      <div>
	        <h2 class="white">Post on our Wall</h2>
	        <p class="description">Like our page on Facebook and freely post your questions on our wall.</p>
	      </div>
	      <div class="row hide-for-small"><div class="large-4 columns padding-text"></div></div>
	    </div>
	  </div>
	    <div class="row hide-for-medium-up"><div class="large-4 columns padding-small"></div></div>
	  </div>
	</section>
		<section>
		  <div>
		    <div class="row hide-for-small"><div class="large-8 columns padding-large"></div></div>
		    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
		    <div class="row">
		    <div class="large-5 push-1 columns">
		      <div class="pic" id="contactImgTwitter" style="padding-top:100px;padding-bottom:120px;"></div>
		    </div>
		    <div class="large-5 pull-1 columns">
		      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
		      <div>
		        <h2 class="white">Send us Tweets</h2>
		        <p class="description">You can ask our help even in the Twitter world. We are just one tweet away.</p>
		      </div>
		    </div>
		  </div>
		    <div class="row hide-for-small"><div class="large-12 columns padding-large"></div></div>
		    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
		  </div>
	</section>
	<section>
	  <div>
	    <div class="row hide-for-medium-up"><div class="large-12 columns padding-small"></div></div>
	    <div class="row">
	    <div class="large-5 push-6 columns">
	      <div class="pic" id="contactImgMobile" style="padding-top:100px;padding-bottom:110px;"></div>
	    </div>
	    <div class="large-4 pull-7 columns">
	      <div class="row hide-for-small"><div class="large-12 columns padding-text"></div></div>
	      <div>
	        <h2 class="white">Talk to Us</h2>
	        <p class="description">You will be heard because we listen. Have a conversation with us! <br> Mobile No. :+639162953501</p>
	      </div>
	      <div class="row hide-for-small"><div class="large-4 columns padding-text"><div class="large-12 columns padding-text"></div></div></div>
	    </div>
	  </div>
	    <div class="row hide-for-medium-up"><div class="large-4 columns padding-small"></div></div>
	  </div>
	</section>
</div>	

<?php $this->load->view('includes/footer');?>
<?php $this->load->view('components/page_tail');?>