<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="ok-pagination">
	<?php next_posts_link( 'Older Posts' ) ?>
	<?php previous_posts_link( 'Newer Posts' ) ?>
</nav>
<?php } ?>
<div class="ok-comments-ad ok-full-bleed"></div>