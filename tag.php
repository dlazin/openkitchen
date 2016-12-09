<?php get_header(); ?>
	<h1 class="ok-title"><?php _e( 'Tag Archives: ', 'openkitchen' ); ?><?php single_tag_title(); ?></h1>
	<?php get_template_part( 'loop' ); ?>
	<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>