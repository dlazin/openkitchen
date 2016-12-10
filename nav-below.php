<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="ok-pagination">
	<?php previous_posts_link( 'Previous Page of Posts' ) ?>
	<?php next_posts_link( 'Next Page of Posts' ) ?>
</nav>
<?php } ?>
<?php get_template_part( 'ad', 'bottom' ); ?>