<?php $this->load->view('components/page_head'); ?>

<body style="background-image: url('img/404.jpg');
    background-position: center center;
    background-size:cover;
    background-repeat: no-repeat;">
    <div class="row" style="padding-top:80px;margin-bottom:400px"><center><h1 class="white">Page not found!</h1></div>
    <div class="row">
    	<div class="large-4 push-4 columns">
    		<h2><a href="<?php echo site_url();?>" class="button success large radius expand">Go to intelleq</a>
    	</h2></div>
    </div>
    
<?php $this->load->view('components/page_tail'); ?>