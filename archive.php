<?php get_header(); ?>
	<h1 class="ok-title">
		<?php 
		if ( is_day() ) {
			printf( __( 'Archives for <span class="ok-title-placeholder">%s</span>', 'openkitchen' ),
				get_the_time( get_option( 'date_format' ) ) );
		} elseif ( is_month() ) {
			printf( __( 'Archives for <span class="ok-title-placeholder">%s</span>', 'openkitchen' ),
				get_the_time( 'F Y' ) );
		} elseif ( is_year() ) {
			printf( __( 'Archives for <span class="ok-title-placeholder">%s</span>', 'openkitchen' ),
				get_the_time( 'Y' ) );
		} else { _e( 'Archives', 'openkitchen' ); }
		?>
	</h1>
	<?php get_template_part( 'loop' ); ?>
	<?php get_template_part( 'nav', 'below' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>