<?php get_header(); ?>
<div class="container main-content">
  <div class="wrapArticolo">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content();
     endwhile; else: ?>
     
      <p><?php _e('Nessun articolo corrisponde ai criteri di ricerca.'); ?></p>

    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
