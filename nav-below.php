<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav class="ok-pagination">
  <?php next_posts_link( 'Older' ) ?>  	
	<?php previous_posts_link( 'Newer' ) ?>
</nav>
<?php } ?>