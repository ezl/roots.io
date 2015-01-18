<header class="banner" role="banner">
  <div itemscope="" itemtype="http://schema.org/Organization">
    <a class="brand" itemprop="url" href="/">
      <i class="fa fa-user"></i>
      <b>Roots</b>
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
      <li><a href="https://github.com/roots"><i class="icon-github"></i> x</a></li>
      <li><a href="http://discourse.roots.io/"><i class="icon-bubble"></i> y</a></li>
      <li><a href="https://twitter.com/retlehs"><i class="icon-twitter"></i> z</a></li>
    </ul>
  </nav>
</header>
