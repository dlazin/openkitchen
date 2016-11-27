<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style><?php echo file_get_contents( get_stylesheet_uri() ); ?></style>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="ok-wrapper">
			<nav class="ok-nav">
				<a href="#" class="ok-menu-control" onclick="document.body.classList.toggle('ok-menu-visible')">
					<svg class="ok-icon"><use href="#icon-bars" xlink:href="#icon-bars"></use></svg>
				</a>
				<div class="ok-site-name">
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
						   title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
							<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					 </a>
					<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
				</div>
				<div class="ok-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					<form role="search" method="get" class="ok-search-form" action="<?php echo home_url( '/' ); ?>">
						<input type="text" class="ok-search-field" name="s" value="SEARCH"
						       onfocus="if (this.value == 'SEARCH') {this.value = '';}"
						       onblur="if (this.value == '') {this.value = 'SEARCH';}">
					</form>
				</div>
			</nav>
			<section class="ok-content">
				<div class="ok-content-ad ok-full-bleed">
					<div style="background: #ccc; max-width: 100%; width: 728px; height: 90px"></div>
				</div>