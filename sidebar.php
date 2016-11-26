</section>
<div class="ok-sidebar">
	<div>
		<a href="/about/">
			<img src="/wp-content/themes/openkitchen/images/leanne-1x.jpg"
			     srcset="/wp-content/themes/openkitchen/images/leanne-1x.jpg 1x,
			             /wp-content/themes/openkitchen/images/leanne-2x.jpg 2x"
			     alt="Leanne Brown" class="ok-full-bleed">
		</a>
		<p>
			Hi! <a href="/about/">I'm Leanne Brown</a>, an avid home cook in Brooklyn by way of Canada.
			I write cookbooks, like the one below!
		</p>
		<ul class="ok-social">
			<li class="ok-icon-wrapper ok-icon-facebook"><a href="https://www.facebook.com/eatgoodandcheap">
				<svg class="ok-icon"><use href="#icon-facebook" xlink:href="#icon-facebook"></use></svg>
			</a></li>
			<li class="ok-icon-wrapper ok-icon-twitter"><a href="https://twitter.com/leelb">
				<svg class="ok-icon"><use href="#icon-twitter" xlink:href="#icon-twitter"></use></svg>
			</a></li>
			<li class="ok-icon-wrapper ok-icon-instagram"><a href="https://www.instagram.com/leanneebrown/">
				<svg class="ok-icon"><use href="#icon-instagram" xlink:href="#icon-instagram"></use></svg>
			</a></li>
			<li class="ok-icon-wrapper ok-icon-pinterest"><a href="https://www.pinterest.com/leanneebrown/">
				<svg class="ok-icon"><use href="#icon-pinterest" xlink:href="#icon-pinterest"></use></svg>
			</a></li>
		</ul>
	</div>
	<div>
		<a href="/good-and-cheap.pdf" target="_blank"
		   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar PDF image');">
			<img src="/wp-content/themes/openkitchen/images/good-and-cheap-sidebar-1x.jpg"
			     srcset="/wp-content/themes/openkitchen/images/good-and-cheap-sidebar-1x.jpg 1x,
			             /wp-content/themes/openkitchen/images/good-and-cheap-sidebar-2x.jpg 2x"
			     alt="Good and Cheap cover 2nd edition" class="ok-full-bleed">
		</a>
		<p>
			<i>Good and Cheap</i> is a gorgeous cookbook for people with limited income,
			particularly on a $4/day food stamps budget.
			<a href="/good-and-cheap.pdf" target="_blank"
			   onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar link');">The PDF is free</a>
			and has been downloaded more than 1,000,000 times.
			<a href="/cookbooks/">I have more cookbooks, too!</a>
		</p>
		<p>
			<a href="http://www.amazon.com/gp/product/0761184996/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=0761184996&amp;linkCode=as2&amp;tag=leanbrow02-20&amp;linkId=UNPUME6T3LLPRK3G" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap Amazon.com sidebar link');" class="button" target="_blank">Amazon.com</a><a href="http://www.amazon.ca/gp/product/0761184996/ref=as_li_qf_sp_asin_tl?ie=UTF8&amp;camp=15121&amp;creative=330641&amp;creativeASIN=0761184996&amp;linkCode=as2&amp;tag=leanbrow0b-20" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap Amazon.ca sidebar link');" class="button" target="_blank">Amazon.ca</a><a href="http://www.leannebrown.com/good-and-cheap.pdf" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar PDF button');" class="button" target="_blank">Free PDF</a><a href="https://cash.me/$LeanneBrown" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar tip link');" class="button" target="_blank">Leave a tip?</a><a href="http://www.workman.com/features/goodandcheap/" onclick="ga('send', 'event', 'Custom Events', 'Click', 'Good and Cheap sidebar non-profits link');" class="button" target="_blank">Bulk orders for $5.19/copy!</a>
		</p>
	</div>
	<div class="ok-full-bleed">
		<div style="background: #ccc; width: 300px; height: 250px"></div>
	</div>
	<div class="ok-full-bleed">
		<div style="background: #ccc; width: 300px; height: 250px"></div>
	</div>
	<div>
		<h2>Sign up for my newsletter!</h2>
		<form action="//leannebrown.us8.list-manage.com/subscribe/post?u=319ebcc8b4ce17f03ae19d7db&amp;id=712abe1a98"
		      method="post" class="ok-newsletter-form" target="_blank" novalidate>
			<input type="email" class="ok-newsletter-field" name="EMAIL" placeholder="email@example.com">
			<span style="position: absolute; left: -5000px;" aria-hidden="true">
				<input type="text" name="b_319ebcc8b4ce17f03ae19d7db_712abe1a98" value="" tabindex="-1">
			</span>
			<input type="submit" class="ok-newsletter-submit" name="subscribe" value="Subscribe">
		</form>
	</div>
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<ul class="ok-sidebar-list">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</ul>
	<?php endif; ?>
</div>