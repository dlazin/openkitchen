<?php
add_action( 'after_setup_theme', 'openkitchen_setup' );
function openkitchen_setup() {
	load_theme_textdomain( 'openkitchen', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 1456;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'openkitchen' ) )
	);
}

add_action( 'comment_form_before', 'openkitchen_enqueue_comment_reply_script' );
function openkitchen_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_default_scripts', 'remove_unnecessary' );
function remove_unnecessary( $scripts ) {
	if ( is_admin() ) return;

	// Remove jQuery and the oEmbed script.
	$scripts->remove( 'jquery' );
	$scripts->remove( 'wp-embed' );

	// Remove WordPress Ultimate Recipe Plugin CSS and font.
	wp_dequeue_style( 'wpurp_style_minified' );
	wp_dequeue_style( 'wpurp_style1' );

	// Remove the oEmbed REST API endpoint.
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	 
	// Turn off oEmbed auto discovery.
	add_filter( 'embed_oembed_discover', '__return_false' );
	 
	// Don't filter oEmbed results.
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
	 
	// Remove oEmbed discovery links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	 
	// Remove oEmbed-specific JavaScript from the front-end and back-end.
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	 
	// Remove all embeds rewrite rules.
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );

	// Remove emoji support for old browsers.
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	add_filter( 'emoji_svg_url', '__return_false' );
}

add_filter('style_loader_src', '_remove_script_version', 15, 1);
add_filter('script_loader_src', '_remove_script_version', 15, 1);
function _remove_script_version($src) {
	$parts = explode('?ver', $src);
	return $parts[0];
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
		'name' => __( 'Footer Widgets', 'openkitchen' ),
		'id' => 'footer-widgets',
		'before_widget' => '<li class="%2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
	register_sidebar( array (
		'name' => __( 'Sidebar Widgets', 'openkitchen' ),
		'id' => 'sidebar-widgets',
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

add_shortcode( 'ad', 'ad_func' );
function ad_func() {
	ob_start();
	get_template_part( 'shortcode', 'ad' );
	return ob_get_clean();
}

add_shortcode( 'cookbooks', 'cookbooks_func' );
function cookbooks_func() {
	ob_start();
	get_template_part( 'shortcode', 'cookbooks' );
	echo( '<script type="application/ld+json">' );
	get_template_part( 'json', 'books' );
	echo( '</script>' );
	return ob_get_clean();
}

add_shortcode( 'cost', 'cost_func' );
function cost_func( $atts ) {
	$a = shortcode_atts( array(
		'total' => '$X',
		'per' => '$X',
		'unit' => 'serving',
	), $atts );

	return "<div class=\"ok-shortcode-cost\"><div>{$a['total']} total</div><div>{$a['per']} / {$a['unit']}</div></div>";
}

add_shortcode( 'fs', 'fromscratch_func' );
function fromscratch_func() {
	ob_start();
	get_template_part( 'shortcode', 'fs' );
	return ob_get_clean();
}

add_shortcode( 'gc', 'goodandcheap_func' );
function goodandcheap_func() {
	ob_start();
	get_template_part( 'shortcode', 'gc' );
	return ob_get_clean();
}

add_shortcode( 'impactlist', 'impactlist_func' );
function impactlist_func() {
	ob_start();
	get_template_part( 'shortcode', 'impactlist' );
	return ob_get_clean();
}

add_shortcode( 'impactmap', 'impactmap_func' );
function impactmap_func() {
	ob_start();
	get_template_part( 'shortcode', 'impactmap' );
	return ob_get_clean();
}

add_shortcode( 'json', 'json_func' );
function json_func( $atts ) {
	$a = shortcode_atts( array(
		'template' => 'leanne',
	), $atts );
	ob_start();
	echo( '<script type="application/ld+json">' );
	get_template_part( 'json', $a['template'] );
	echo( '</script>' );
	return ob_get_clean();
}