<div class="post-sidebar">
  <?php get_template_part('templates/post', 'like-button'); ?>
  <dl>
    <dt>Location</dt>
    <dd><a href="http://maps.google.com/maps?q=<?php the_field('location_coords'); ?>" title="<?php the_title(); ?> on Google Maps" target="_blank"><?php the_field('location_coords'); ?></a></dd>
    <dt>Occupancy</dt>
    <dd><?php the_field('occupancy'); ?></dd>
    <dt>Updated</dt>
    <dd><time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></dd>
    <dt>Added By</dt>
    <dd class="byline author vcard"><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></dd>
  </dl>
</div>
