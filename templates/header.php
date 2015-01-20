<header class="banner" role="banner">
<button type="button" class="toggle-menu" onclick="$('#wrapper').toggleClass('toggled')">
  <i class="fa fa-bars"></i>
</button>
  <div id="masthead">
    <a id="blog-name" itemprop="url" href="<?php echo home_url(); ?>">
      <i class="fa fa-github"></i>
      <?php bloginfo('name'); ?>
    </a>
    <div id="blog-description">
      <?php echo get_bloginfo('description'); ?>
    </div>
  </div><!-- brand/logo -->



  <div id="sidebar-wrapper">
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav'));
        endif;
      ?>
      <ul class="social">
        <li><a href=""><i class="fa fa-github"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
      </ul>
    </nav>
  </div><!-- #sidebar-wrapper -->
</header>
