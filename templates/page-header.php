<?php use Roots\Sage\Titles; ?>

<div class="page-header">
  <?php if (is_search()): ?>
  <h2><?php get_search_query() ?>
  <?php else : ?>
  <select class="post-select">
    <?php if (is_page('popular' )): ?>
    <option value="<?= get_permalink( get_page_by_path( 'popular' ) ); ?>">Popular</option>
    <option value="<?= get_permalink( get_page_by_path( 'recent' ) ); ?>">Recent</option>
    <?php else : ?>
    <option value="<?= get_permalink( get_page_by_path( 'recent' ) ); ?>">Recent</option>
    <option value="<?= get_permalink( get_page_by_path( 'popular' ) ); ?>">Popular</option>
    <?php endif; ?>
    <?php if (is_user_logged_in()): ?>
    <option>Your Sites</option>
    <option>Saved Sites</option>
    <?php endif; ?>
  </select>
  <?php endif; ?>
  <button class="pag-header-item is-active js-toggle-list">List</button>
  <button class="pag-header-item js-map-toggle">Map</button>
</div>
