<header class="banner" role="banner">
<a class="toggle-menu" onclick="$('#wrapper').toggleClass('toggled')">
  <i class="fa fa-bars"></i>
</>
  <div id="masthead">
    <a id="blog-name" itemprop="url" href="<?php echo home_url(); ?>">
      <p><img src="http://blog.ezliu.com/wp-content/uploads/2014/01/lau2.png"></p>
      <p><?php bloginfo('name'); ?></p>
    </a>
  </div><!-- brand/logo -->



  <div id="sidebar-wrapper">
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav'));
        endif;
      ?>
      <ul class="social">
        <li><a target="_blank" href="https://github.com/ezl"><i class="fa fa-github"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/in/ericzliu"><i class="fa fa-linkedin-square"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/ezliu"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </nav>
  </div><!-- #sidebar-wrapper -->
</header>
