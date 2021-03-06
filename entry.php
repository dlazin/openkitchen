<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_singular() ) { echo '<h1 class="ok-title">'; } else { echo '<h2 class="ok-title">'; } ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
	<?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
	<?php if ( has_post_thumbnail() ) {
		if ( !is_singular() ) {
			echo( '<a href="' );
			the_permalink();
			echo( '">' );
		}
		the_post_thumbnail( 'large', array('class' => 'aligncenter') );
		if ( !is_singular() ) {
			echo( '</a>' );
		}
	} ?>
	<?php the_content( $more_link_text = 'Keep reading' ); ?>
</article>