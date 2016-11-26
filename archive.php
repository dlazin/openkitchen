<?php get_header(); ?>
<section class="ok-content">
	<h1 class="ok-title">
		<?php 
		if ( is_day() ) { printf( __( 'Daily Archives: %s', 'openkitchen' ), get_the_time( get_option( 'date_format' ) ) ); }
		elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'openkitchen' ), get_the_time( 'F Y' ) ); }
		elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'openkitchen' ), get_the_time( 'Y' ) ); }
		else { _e( 'Archives', 'openkitchen' ); }
		?>
	</h1>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>