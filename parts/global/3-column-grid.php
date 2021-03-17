<?php
/*
 * 3-Column Grid (Global)
 *
 * Template part used on various templates/views
 */

// 3-Column Grid Custom Fields
$intro = get_sub_field('3_column_grid_intro_content');

if( have_rows('3_column_grid') ) : ?>

  <section class="three-column-grid">
    <div class="container">
      <div class="row row--justify-content-center">
        <div class="col-12">
          <?php echo $intro; ?>
        </div>

        <?php while( have_rows('3_column_grid') ) : the_row();
          $img = wp_get_attachment_image_src(get_sub_field('image'), '');
          $content = get_sub_field('content');
          $btnToggle = get_sub_field('button_toggle');
          $btnClass = get_sub_field('button_class');
          $btn = get_sub_field('button'); ?>

          <div class="col-4 md-col-5 sm-col-10 stretch">
            <div class="three-column-grid__column">
              <div>

                <?php if( $img ) : ?>
                  <div class="three-column-grid__img" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>
                <?php endif; ?>

                <div class="three-column-grid__text">
                  <?php echo $content; ?>
                </div>

              </div>

              <?php if( $btnToggle && $btn ) : ?>

                <div class="text-center">
                  <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                    <?php echo $btn['title']; ?>
                  </a>
                </div>

              <?php endif; ?>

            </div>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
