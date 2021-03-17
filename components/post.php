<?php
/*
 * Post Component
 *
 * Component part used on various templates/views
 */
?>

<div class="row row--justify-content-center">
  <div class="col-4 text-center">

    <?php if( has_post_thumbnail() ) : ?>

      <a href="<?php the_permalink();?>">

        <img src="<?php echo featuredURL('text_image_split'); ?>" alt="<?php the_title(); ?> featured image">

      </a>

    <?php endif; ?>

  </div>

  <div class="col-7">
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

    <?php get_template_part('parts/meta'); ?>

    <?php the_excerpt(); ?>

    <a href="<?php the_permalink(); ?>">
      Read More <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</div>
