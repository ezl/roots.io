<header class="banner" role="banner">
  <div itemscope="" itemtype="http://schema.org/Organization">
    <a class="brand" itemprop="url" href="/">
      <img itemprop="logo" src="http://roots.io/assets/img/roots.svg">
      <i class="icon-roots"></i>
      <b>Roots</b>
    </a>
  </div><!-- roots logo -->

  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>

  <nav class="collapse navbar-collapse" role="navigation">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
    <ul class="social">
      <li><a href="https://github.com/roots"><i class="icon-github"></i> x</a></li>
      <li><a href="http://discourse.roots.io/"><i class="icon-bubble"></i> y</a></li>
      <li><a href="https://twitter.com/retlehs"><i class="icon-twitter"></i> z</a></li>
    </ul>
  </nav>
</header>
