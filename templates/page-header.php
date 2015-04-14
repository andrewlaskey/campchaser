<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <?php if (is_search()): ?>
  <h2><?php get_search_query() ?>
  <?php else : ?>
  <select class="post-select">
    <option>Popular</option>
    <option>Recent</option>
    <?php if (is_user_logged_in()): ?>
    <option>Your Sites</option>
    <option>Saved Sites</option>
    <?php endif; ?>
  </select>
  <?php endif; ?>
  <button class="pag-header-item is-active js-toggle-list">List</button>
  <button class="pag-header-item js-map-toggle">Map</button>
</div>
