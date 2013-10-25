<!--Navigation Bar-->
<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area">
    <li class="name"><a href="<?php echo base_url('admin/dashboard'); ?>" class="icon"> </a><h1><a href="<?php echo base_url('admin/dashboard'); ?>" style="display:inline" class="white">intelleq</a></h1></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
        <li style="padding-right:10;padding-left:10"><a href="<?php echo site_url('admin/user'); ?>"><?php echo ucfirst($this->session->userdata('adminname')); ?></a></li>
        <li style="padding-right:10;padding-left:10"><?php echo anchor('admin/user/logout', 'Sign Out','class="button radius"'); ?></li>
    </ul>
  </section>
</div>
</header>