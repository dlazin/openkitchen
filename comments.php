<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<section class="ok-comments">
	<?php
	if ( have_comments() ) : 
	global $comments_by_type;
	$comments_by_type = &separate_comments( $comments );
	if ( ! empty( $comments_by_type['comment'] ) ) : 
	?>
	<h2 class="ok-comments-title"><?php comments_number(); ?></h2>
	<?php if ( get_comment_pages_count() > 1 ) : ?>
	<nav class="ok-pagination">
		<?php paginate_comments_links(); ?>
	</nav>
	<?php endif; ?>
	<ul class="ok-comments-list">
		<?php wp_list_comments( 'type=comment' ); ?>
	</ul>
	<?php if ( get_comment_pages_count() > 1 ) : ?>
	<nav class="ok-pagination">
		<?php paginate_comments_links(); ?>
	</nav>
	<?php endif; endif; endif; if ( comments_open() ) comment_form(); ?>
</section>