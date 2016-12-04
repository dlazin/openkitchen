<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="ok-title"><?php the_title(); ?></h1>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large', array('class' => 'aligncenter') ); } ?>
			<?php the_content(); ?>
		</article>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
	<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>