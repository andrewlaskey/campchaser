<div class="post-sidebar">
  <button class="save-site"># Likes</button>
  <dl>
    <dt>Location</dt>
    <dd>XX.XXX, XX.XXX</dd>
    <dt>Occupancy</dt>
    <dd>5 - 8 people</dd>
    <dt>Updated</dt>
    <dd><time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time></dd>
    <dt>Added By</dt>
    <dd class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></dd>
  </dl>
</div>
