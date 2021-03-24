<?php
/*
 * Testimonial Slider (Global)
 *
 * Template part used on various templates/views
 */

// Testimonial Slider Custom Fields
$intro = get_sub_field('testimonial_slider_content');
$bgImage = wp_get_attachment_image_src(get_sub_field('testimonial_slider_background_image'), 'large');

$args = array(
  'post_type' => array( 'simple_testimonials' ),
	'nopaging'  => true,
);

$query = new WP_Query( $args ); ?>

<section class="slider-section testimonial-slider" style="background: url(<?php echo $bgImage[0]; ?>) center/cover;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo $intro; ?>
      </div>

      <div class="col-11 sm-col-10 col-centered slider-section__slider">

        <?php if ( $query->have_posts() ): ?> 

          <?php while( $query->have_posts() ) : $query->the_post();
            $testimonial = get_field('testimonial'); ?>

            <div class="slider-section__slide text-center">

              <?php if( has_post_thumbnail() ) : ?>
                <img src="<?php echo featuredURL('large'); ?>" alt="<?php the_title(); ?> featured image">
                <hr>
              <?php endif; ?>

              <?php echo $testimonial; ?>

              <h2 class="cursive-heading">- <?php the_title(); ?></h2>

            </div>

          <?php endwhile; ?>

        <? endif; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</section>