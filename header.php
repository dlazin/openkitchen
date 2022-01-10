<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,400italic,700">
		<style><?php include 'style.css' ?></style>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create','UA-49042255-1','auto');
		ga('send','pageview');
		</script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="ok-wrapper">
			<nav class="ok-nav">
				<a href="#" class="ok-menu-control" onclick="document.body.classList.toggle('ok-menu-visible')">
					<svg class="ok-icon"><use href="#icon-bars" xlink:href="#icon-bars"></use></svg>
				</a>
				<div class="ok-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
						<img src="/wp-content/themes/openkitchen/images/logo-1x.png"
						     srcset="/wp-content/themes/openkitchen/images/logo-1x.png 1x,
						            /wp-content/themes/openkitchen/images/logo-2x.png 2x"
						     class="ok-logo-desktop" alt="Leanne Brown logo" width="240" height="180">
						<img src="/wp-content/themes/openkitchen/images/logo-horiz-1x.png"
						     srcset="/wp-content/themes/openkitchen/images/logo-horiz-1x.png 1x,
						            /wp-content/themes/openkitchen/images/logo-horiz-2x.png 2x"
						     class="ok-logo-mobile" alt="Leanne Brown logo" width="240" height="56">
					</a>
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
				<?php get_template_part( 'ad', 'top' ); ?>