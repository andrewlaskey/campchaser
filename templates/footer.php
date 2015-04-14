<footer class="main-footer" role="contentinfo">
  <div class="container">
  	<nav class="layout-left">
	    <?php get_template_part('templates/social'); ?>
	</nav>
	<nav class="layout-right">
		<a href="<?= get_permalink( get_page_by_path( 'legal' ) ); ?>" title="Legal">Terms & Privacy</a>
	</nav>
  </div>
</footer>
