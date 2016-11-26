<?php get_header(); ?>
<section class="ok-content">
  <h1 class="ok-title"><?php _e( 'Not Found', 'openkitchen' ); ?></h1>
  <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'openkitchen' ); ?></p>
  <?php get_search_form(); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>