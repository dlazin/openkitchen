	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
	<div class="ok-content-footer">
		<ul class="ok-widget-list" id="ok-footer-widgets">
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
		</ul>
	</div>
	<?php endif; ?>
	<div class="ok-footer-social">
		<span class="ok-footer-social-label">Share!</span>
		<ul class="ok-footer-social-list">
			<li class="ok-icon-wrapper ok-icon-facebook">
				<a href="https://facebook.com/share.php?u=<?php echo( get_permalink() ); ?>"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Facebook share link');">
					<svg class="ok-icon"><use href="#icon-facebook" xlink:href="#icon-facebook"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-twitter">
				<a href="https://twitter.com/share?text=<?php echo( get_the_title() ); ?>&url=<?php echo( get_permalink() ); ?>&via=leelb"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Twitter share link');">
					<svg class="ok-icon"><use href="#icon-twitter" xlink:href="#icon-twitter"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-pinterest">
				<a href="https://www.pinterest.com/pin/create/button?url=<?php echo( get_permalink() ); ?>&media=<?php echo( the_post_thumbnail_url( 'large' ) ); ?>&description=<?php echo( get_the_title() ); ?>"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Pinterest share link');">
					<svg class="ok-icon"><use href="#icon-pinterest" xlink:href="#icon-pinterest"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-email">
				<a href="mailto:?subject=<?php echo( get_the_title() ); ?>&body=<?php echo( get_permalink() ); ?>"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Email share link');">
					<svg class="ok-icon"><use href="#icon-email" xlink:href="#icon-email"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-text">
				<a href="sms:&body=<?php echo( get_the_title() ); ?> <?php echo( get_permalink() ); ?>"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Text share link');">
					<svg class="ok-icon"><use href="#icon-text" xlink:href="#icon-text"></use></svg>
				</a>
			</li>
		</ul>
	</div>
</section>
<div class="ok-sidebar">
	<div>
		<a href="/about/">
			<img src="/wp-content/themes/openkitchen/images/leanne-1x.jpg"
			     srcset="/wp-content/themes/openkitchen/images/leanne-1x.jpg 1x,
			             /wp-content/themes/openkitchen/images/leanne-2x.jpg 2x"
			     class="ok-full-bleed" alt="Leanne Brown" width="300" height="180">
		</a>
		<p>
			Hi, <a href="/about/">I'm Leanne Brown</a>. I’m a <a href="/cookbooks/">bestselling cookbook author</a>.
			I want to help you find peace, healing and freedom through cooking.
		</p>
		<ul class="ok-sidebar-social">
			<li class="ok-icon-wrapper ok-icon-instagram">
				<a href="https://www.instagram.com/leanneebrown/"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Instagram sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-instagram" xlink:href="#icon-instagram"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-twitter">
				<a href="https://twitter.com/leelb"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Twitter sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-twitter" xlink:href="#icon-twitter"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-facebook">
				<a href="https://www.facebook.com/eatgoodandcheap"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Facebook sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-facebook" xlink:href="#icon-facebook"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-pinterest">
				<a href="https://www.pinterest.com/leanneebrown/"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Pinterest sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-pinterest" xlink:href="#icon-pinterest"></use></svg>
				</a>
			</li>
		</ul>
		<div class="ok-newsletter-mobile">
			<h3>Sign up for my newsletter!</h3>
			<a href="https://leannebrown.substack.com/" class="button" target="_blank"
		       onclick="ga('send', 'event', 'Custom Events', 'Click', 'Substack sidebar mobile link');">Subscribe</a>
		</div>
	</div>
	<div class="ok-sidebar-book">
		<a href="https://www.amazon.com/dp/1523509678?tag=leanbrow02-20" target="_blank"
		   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar image');">
			<img src="/wp-content/themes/openkitchen/images/good-enough-sidebar-1x.jpg"
			     srcset="/wp-content/themes/openkitchen/images/good-enough-sidebar-1x.jpg 1x,
			             /wp-content/themes/openkitchen/images/good-enough-sidebar-2x.jpg 2x"
			     class="ok-full-bleed" alt="Good Enough cover" width="300" height="386">
		</a>
		<p>
			My newest creation, <i>Good Enough</i>, is a self-care cookbook that offers personal and
			vulnerable storytelling, delicious recipes, and encouraging advice to teach you how to
			accept yourself, love yourself, and find peace through the act of cooking.
			<a href="/announcing-good-enough/">Learn more here!</a>
		</p>
		<div class="ok-book-buttons">
			<a href="https://www.amazon.com/dp/1523509678?tag=leanbrow02-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar Amazon.com link');" class="button" target="_blank">Amazon</a><a href="https://www.amazon.ca/dp/1523509678?tag=leanbrow0b-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar Amazon.ca link');" class="button" target="_blank">Amazon.ca</a><a href="https://www.barnesandnoble.com/w/good-enough-leanne-brown/1140124566" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar B&N link');" class="button" target="_blank">B & N</a><a href="https://www.booksamillion.com/p/9781523509676" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar Books-A-Million link');" class="button" target="_blank">Books-a-Million</a><a href="https://bookshop.org/books/good-enough-a-cookbook-embracing-the-joys-of-imperfection-in-and-out-of-the-kitchen/9781523509676" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar Bookshop.org link');" class="button" target="_blank">Bookshop.org</a><a href="https://www.indiebound.org/book/9781523509676?aff=leannebrown" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar IndieBound link');" class="button" target="_blank">IndieBound</a><a href="https://www.powells.com/book/good-enough-a-cookbook-embracing-the-joys-of-imperfection-in-out-of-the-kitchen-9781523509676?partnerid=41395&p_tx" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good Enough sidebar Powells link');" class="button" rel="powells-9781523509676" target="_blank">Powell's</a>
		</div>
	</div>
	<div class="ok-sidebar-book">
		<a href="/good-and-cheap.pdf" target="_blank"
		   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar PDF image');">
			<img src="/wp-content/themes/openkitchen/images/good-and-cheap-sidebar-1x.jpg"
			     srcset="/wp-content/themes/openkitchen/images/good-and-cheap-sidebar-1x.jpg 1x,
			             /wp-content/themes/openkitchen/images/good-and-cheap-sidebar-2x.jpg 2x"
			     class="ok-full-bleed" alt="Good and Cheap cover 2nd edition" width="300" height="300">
		</a>
		<p>
			<i>Good and Cheap</i> is a gorgeous cookbook for people with limited income,
			particularly on a $4/day food stamps budget.
			<a href="/good-and-cheap.pdf" target="_blank"
			   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar link');">The PDF is free</a>
			<a href="/bueno-y-barato.pdf" target="_blank"
			   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Bueno y Barato sidebar link');">(ahora en Español!)</a>
			and has been downloaded over 15,000,000 times. For more info, see
			<a href="/all-about-good-and-cheap/">All About <i>Good and Cheap</i></a> and
			<a href="/impact/">Donation Impact</a>.
		</p>
		<div class="ok-book-buttons">
			<a href="https://www.amazon.com/dp/0761184996?tag=leanbrow02-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar Amazon.com link');" class="button" target="_blank">Amazon</a><a href="https://www.amazon.ca/dp/0761184996?tag=leanbrow02-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar Amazon.ca link');" class="button" target="_blank">Amazon.ca</a><a href="/good-and-cheap.pdf" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar PDF button');" class="button" target="_blank">Free PDF</a><a href="/bueno-y-barato.pdf" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Bueno y Barato sidebar PDF button');" class="button" target="_blank">PDF (Español)</a><a href="https://www.workman.com/features/goodandcheap/" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar non-profits link');" class="button" target="_blank">In bulk: $5.19/copy!</a>
		</div>
	</div>
	<?php get_template_part( 'ad', 'side1' ); ?>
	<div class="ok-newsletter-desktop">
		<h3>Sign up for my newsletter!</h3>
		<a href="https://leannebrown.substack.com/" class="button" target="_blank"
		   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Substack sidebar desktop link');">Subscribe</a>
	</div>
	<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
	<ul class="ok-widget-list" id="ok-sidebar-widgets">
		<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	</ul>
	<?php endif; ?>
	<?php get_template_part( 'ad', 'side2' ); ?>
</div>