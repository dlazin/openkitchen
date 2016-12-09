<?php get_header(); ?>
	<h1 class="ok-title"><?php _e( 'Archives for ', 'openkitchen' ); ?>
		<span class="ok-title-placeholder"><?php single_cat_title(); ?></span>
	</h1>
	<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	<?php get_template_part( 'loop' ); ?>
	<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>