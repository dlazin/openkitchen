<?php get_header(); ?>
	<h1 class="ok-title"><?php _e( 'Tag Archives: ', 'openkitchen' ); ?><?php single_tag_title(); ?></h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>