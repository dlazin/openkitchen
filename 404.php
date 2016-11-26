<?php get_header(); ?>
<section class="ok-content">
	<h1 class="ok-title"><?php _e( 'Not Found', 'openkitchen' ); ?></h1>
	<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'openkitchen' ); ?></p>
	<form role="search" method="get" class="ok-search-form" action="<?php echo home_url( '/' ); ?>">
		<input type="text" class="ok-search-field" name="s" value="SEARCH"
		       onfocus="if (this.value == 'SEARCH') {this.value = '';}"
		       onblur="if (this.value == '') {this.value = 'SEARCH';}">
		<input type="submit" class="ok-search-submit" value="Search">
	</form>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>