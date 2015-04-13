<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="navbar" role="banner">
  <div class="container">
    <div class="navbar-left">
      <a class="navbar-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    </div>

    <div class="navbar-right" role="navigation">
      <a class="hide--medium" href="#" title="Add a Site">&plus; Add Site</a>
      <button class="navbar-button js-toggle-menu">Menu</button>
    </div>
  </div>

  <div class="main-menu">
    <div class="container">
      <!-- Search -->
      <?php get_search_form(); ?>
      <!-- End Search -->

      <nav class="main-menu-nav">
        <a href="#" title="Add a Site">Add Site</a>
        <?php if (is_user_logged_in()): ?>
        <a href="#" title="Your Profile">Profile</a>
        <?php else : ?>
        <a href="#" title="Login">Sign up/Log in</a>
        <?php endif; ?>
        <a href="#" title="About CampChaser">About CampChaser</a>
        <!-- Follow Campchaser -->
        <a class="social-icon" href="https://www.facebook.com/pages/Campchaser/795282490559319" title="Facebook">
          <span class="sr-text">Facebook</span>
        </a>
        <a class="social-icon" href="https://twitter.com/CampChaser" title="Twitter">
          <span class="sr-text">Twitter</span>
        </a>
        <a class="social-icon" href="http://instagram.com/campchaser/" title="Instagram">
          <span class="sr-text">Instagram</span>
        </a>
      </nav>
    </div>
    <button class="navbar-button js-toggle-menu">&times;</button>
  </div>
</header>
