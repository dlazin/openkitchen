<?php if ( 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) return; ?>
<div class="ok-comments-ad ok-full-bleed">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Bottom responsive -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-5824609370021331"
	     data-ad-slot="8382073407"
	     data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>
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
	<?php endif; endif; endif; if ( comments_open() ) comment_form( array(
		'cancel_reply_before' => '<span class="reply">',
		'cancel_reply_after' => '</span>',
		'comment_notes_before' => __( '(Don\'t worry, your email address won\'t be published.)', 'openkitchen' ),
		'label_submit' => __( 'Submit', 'openkitchen' ),
		'title_reply' => __( 'Tell me what you think!', 'openkitchen' ),
	) ); ?>
</section>