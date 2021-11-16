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
			Hi! <a href="/about/">I'm Leanne Brown</a>, a home cook in Brooklyn by way of Canada.
			I write cookbooks, like the one below!
		</p>
		<ul class="ok-sidebar-social">
			<li class="ok-icon-wrapper ok-icon-facebook">
				<a href="https://www.facebook.com/eatgoodandcheap"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Facebook sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-facebook" xlink:href="#icon-facebook"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-twitter">
				<a href="https://twitter.com/leelb"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Twitter sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-twitter" xlink:href="#icon-twitter"></use></svg>
				</a>
			</li><li class="ok-icon-wrapper ok-icon-instagram">
				<a href="https://www.instagram.com/leanneebrown/"
				   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Instagram sidebar follow link');">
					<svg class="ok-icon"><use href="#icon-instagram" xlink:href="#icon-instagram"></use></svg>
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
			<form action="//leannebrown.us8.list-manage.com/subscribe/post?u=319ebcc8b4ce17f03ae19d7db&amp;id=712abe1a98"
			      method="post" class="ok-newsletter-form" target="_blank" novalidate>
				<input type="email" class="ok-newsletter-field" name="EMAIL" placeholder="email@example.com">
				<span style="position: absolute; left: -5000px;" aria-hidden="true">
					<input type="text" name="b_319ebcc8b4ce17f03ae19d7db_712abe1a98" value="" tabindex="-1">
				</span>
				<input type="submit" class="ok-newsletter-submit" name="subscribe" value="Subscribe">
			</form>
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
			and has been downloaded over 15,000,000 times.
			<a href="/cookbooks/">I have more cookbooks!</a>
		</p>
		<div class="ok-book-buttons">
			<a href="https://www.amazon.com/gp/product/0761184996/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=0761184996&amp;linkCode=as2&amp;tag=leanbrow02-20&amp;linkId=UNPUME6T3LLPRK3G" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar Amazon.com link');" class="button" target="_blank">Amazon</a><a href="/good-and-cheap.pdf" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar PDF button');" class="button" target="_blank">Free PDF</a><a href="/bueno-y-barato.pdf" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Bueno y Barato sidebar PDF button');" class="button" target="_blank">PDF (Español)</a><a href="https://www.amazon.ca/gp/product/0761184996/ref=as_li_qf_sp_asin_tl?ie=UTF8&amp;camp=15121&amp;creative=330641&amp;creativeASIN=0761184996&amp;linkCode=as2&amp;tag=leanbrow0b-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar Amazon.ca link');" class="button" target="_blank">Amazon.ca</a><a href="https://www.workman.com/features/goodandcheap/" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar non-profits link');" class="button" target="_blank">In bulk: $5.19/copy!</a>
		</div>
	</div>
	<?php get_template_part( 'ad', 'side1' ); ?>
	<div class="ok-newsletter-desktop">
		<h3>Sign up for my newsletter!</h3>
		<form action="//leannebrown.us20.list-manage.com/subscribe/post?u=4857bc97f09570bde4724e9f0&amp;id=d11c02c5e9"
		      method="post" class="ok-newsletter-form" target="_blank" novalidate>
			<input type="email" class="ok-newsletter-field" name="EMAIL" placeholder="email@example.com">
			<span style="position: absolute; left: -5000px;" aria-hidden="true">
				<input type="text" name="b_319ebcc8b4ce17f03ae19d7db_712abe1a98" value="" tabindex="-1">
			</span>
			<input type="submit" class="ok-newsletter-submit" name="subscribe" value="Subscribe">
		</form>
	</div>
	<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
	<ul class="ok-widget-list" id="ok-sidebar-widgets">
		<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	</ul>
	<?php endif; ?>
	<?php get_template_part( 'ad', 'side2' ); ?>
</div>