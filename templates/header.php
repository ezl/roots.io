<header class="banner" role="banner">
  <div itemscope="" itemtype="http://schema.org/Organization">
    <a class="brand" itemprop="url" href="<?php echo home_url(); ?>">
      <i class="fa fa-github"></i>
      <?php bloginfo('name'); ?>
    </a>
  </div><!-- brand/logo -->
  <div id="blog-description">
    <?php echo get_bloginfo('description'); ?>
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
