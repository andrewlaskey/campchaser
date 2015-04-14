<div class="post-sidebar">
  <button class="save-site"><?php the_field('likes'); ?> Likes</button>
  <dl>
    <dt>Location</dt>
    <dd><?php the_field('location_coords'); ?></dd>
    <dt>Occupancy</dt>
    <dd><?php the_field('occupancy'); ?></dd>
    <dt>Updated</dt>
    <dd><time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></dd>
    <dt>Added By</dt>
    <dd class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></dd>
  </dl>
</div>
