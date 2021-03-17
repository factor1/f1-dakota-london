<?php
/*
 * Post List (Blog)
 *
 * Template part used on index.php
 */
?>

<section class="index--list">
  <div class="container">

    <?php if( have_posts() ) :

      while( have_posts() ) : the_post();

        get_template_part('components/post');

      endwhile; ?>

      <div class="row">
        <div class="col-6 col-centered text-center">
          <?php the_posts_pagination( array('mid_size' => 2) ); ?>
        </div>
      </div>

    <?php else : ?>

      <div class="row row--justify-content-center">
        <div class="col-11">
          <h2>Sorry, no posts have been found.</h2>
        </div>
      </div>

    <?php endif; ?>

    </div>
  </div>
</section>
