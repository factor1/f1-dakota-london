<?php
/*
 * Carousel (global)
 *
 * Template part used on various templates/views
 */

// Carousel custom Fields
$bgImage = wp_get_attachment_image_src(get_sub_field('carousel_background_image'), 'large');
$intro_content = get_sub_field('carousel_intro_content');
$slides = get_sub_field('carousel_slider');
?>
<section class="carousel" style="background: url(<?php echo $bgImage[0]; ?>) center/cover">
  <div class="container">
    <div class="row">
      <div class="col-12">
        
        <div class="carousel__container">
          
          <?php while( have_rows('carousel_slider') ) : the_row();
            //slides custom sub fields
            $bg = wp_get_attachment_image_src(get_sub_field('slide_background'), 'large');
            $content = get_sub_field('slide_content');
            $btnAlign = get_sub_field('slide_button_alignment'); 
          ?>
            <section class="carousel__slide">
              <?php echo $intro_content; ?>
              <img src="<?php echo $bg[0]; ?>" alt="">

              <?php echo $content;

              // Optional buttons
              if( have_rows('slide_buttons') ) : ?>

                <div class="buttons text-<?php echo $btnAlign; ?>">

                  <?php while( have_rows('slide_buttons') ) : the_row();
                    $btnClass = get_sub_field('button_class');
                    $btn = get_sub_field('button'); ?>

                    <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                      <?php echo $btn['title']; ?>
                    </a>

                  <?php endwhile; ?>

                </div>

              <?php endif; ?>
            </section>
          <?php endwhile; ?>
        
        </div>
        
      </div>
    </div>
  </div>

</section>

