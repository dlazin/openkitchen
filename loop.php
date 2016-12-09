<?php
if ( have_posts() ) :
	$count = 0;
	while ( have_posts() ) : the_post(); 
		$count++;
		if ($count == 3) {
			get_template_part( 'ad', 'middle' );
		}
		get_template_part( 'entry' );
	endwhile;
endif; 
?>