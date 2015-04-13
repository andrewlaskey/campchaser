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

        <?php get_template_part('templates/social'); ?>

      </nav>
    </div>
    <button class="navbar-button js-toggle-menu">&times;</button>
  </div>
</header>
