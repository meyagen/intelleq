<!--Navigation Bar-->
<header>
<div class="fixed">
<nav class="top-bar fixed">
  <ul class="title-area">
    <li class="name"><h1><a href="">intelleq</a></h1></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
  </ul>
  <section class="top-bar-section">
    <ul class="right"style="background:rgba(105, 34, 34, 0)">
        <li style="padding-right:10;padding-left:10"><a><?php echo ucfirst($this->session->userdata('adminname')); ?></a></li>
        <li style="padding-right:10;padding-left:10"><?php echo anchor('admin/user/logout', 'Sign Out','class="button radius"'); ?></li>
        <li style="padding-right:0;padding-left:10">
            <input type="text" placeholder="Search intelleq">
        </li>
    </ul>
  </section>
</div>
</header>