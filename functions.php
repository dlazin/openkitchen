<?php
add_action( 'after_setup_theme', 'openkitchen_setup' );
function openkitchen_setup() {
	load_theme_textdomain( 'openkitchen', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'openkitchen' ) )
	);
}

add_action( 'wp_enqueue_scripts', 'openkitchen_load_scripts' );
function openkitchen_load_scripts() {
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'openkitchen_enqueue_comment_reply_script' );
function openkitchen_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_filter( 'the_title', 'openkitchen_title' );
function openkitchen_title( $title ) {
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

add_filter( 'wp_title', 'openkitchen_filter_wp_title' );
function openkitchen_filter_wp_title( $title ) {
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'openkitchen_widgets_init' );
function openkitchen_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar Widgets', 'openkitchen' ),
		'id' => 'primary-widget-area',
		'before_widget' => '<li class="%2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
}

function openkitchen_custom_pings( $comment ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
	<?php 
}

add_filter( 'get_comments_number', 'openkitchen_comments_number' );
function openkitchen_comments_number( $count ) {
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}