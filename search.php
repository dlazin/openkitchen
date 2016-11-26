<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<h1 class="ok-title"><?php printf( __( 'Search Results for: %s', 'openkitchen' ), get_search_query() ); ?></h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	<?php else : ?>
		<h1 class="ok-title"><?php _e( 'Nothing Found', 'openkitchen' ); ?></h1>
		<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'openkitchen' ); ?></p>
		<form role="search" method="get" class="ok-search-form" action="<?php echo home_url( '/' ); ?>">
			<input type="text" class="ok-search-field" name="s" value="<?php echo get_search_query() ?>">
			<input type="submit" class="ok-search-submit" value="Search">
		</form>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>