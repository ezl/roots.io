<header class="banner" role="banner">
  <div itemscope="" itemtype="http://schema.org/Organization">
    <a class="brand" itemprop="url" href="/">
      <i class="fa fa-github"></i>
      Title
    </a>
  </div><!-- roots logo -->

  <div style="display:none;">
    <a style="color:white;" class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>

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
</header>
