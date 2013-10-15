<!--Navigation Bar-->
<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area" style="display:inline">
    <li class="toggle-topbar menu-icon right" style="padding-top:22px"><a href="#"><span></span></a></li>
    <li class="name"><a href="<?php echo base_url(); ?>" class="icon"> </a><h1><a href="<?php echo base_url(); ?>" style="display:inline" class="white">intelleq</a></h1></li>
    
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
        <li style="padding-right:10;padding-left:10"><a href="<?php echo base_url(); ?>" class="white"><?php echo ucfirst($firstname) . " " . ucfirst($lastname); ?></a></li>
        <li style="padding-right:10;padding-left:10"><a class="button radius" href="login/logout">Sign Out</a></li>
    </ul>
  </section>
</div>
</header>