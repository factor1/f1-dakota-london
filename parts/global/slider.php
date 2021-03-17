<?php
/*
 * Slider (Global)
 *
 * Template part used on various templates/views
 */

// Slider Custom Fields
$intro = get_sub_field('slider_intro_content');

if( have_rows('slider') ) : ?>

  <section class="slider-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php echo $intro; ?>
        </div>

        <div class="col-11 sm-col-10 col-centered slider-section__slider">

          <?php while( have_rows('slider') ) : the_row();
            $content = get_sub_field('content');
            $btnToggle = get_sub_field('button_toggle');
            $btnClass = get_sub_field('button_class');
            $btn = get_sub_field('button'); ?>

            <div class="slider-section__slide">
              <?php echo $content;

              // Optional button
              if( $btnToggle && $btn ) : ?>

                <div class="text-center">
                  <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                    <?php echo $btn['title']; ?>
                  </a>
                </div>

              <?php endif; ?>

            </div>

          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
