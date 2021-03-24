<?php
/*
 * 3-Column Grid (Global)
 *
 * Template part used on various templates/views
 */

// 3-Column Grid Custom Fields
$intro = get_sub_field('3_column_grid_intro_content');
$bgColor = get_sub_field('3_column_grid_background_color');
$bgImage = wp_get_attachment_image_src(get_sub_field('3_column_grid_background_image'), 'hero');
$lineClass = count(get_sub_field('3_column_grid')) > 2 ? ' three-column-grid__separator' : '';
$mainbtnToggle = get_sub_field('3_column_grid_button_toggle');
$mainbtnAlign = get_sub_field('3_column_grid_button_alignment');
$mainbtnClass = get_sub_field('3_column_grid_button_class');
$mainbtn = get_sub_field('3_column_grid_button');

if( have_rows('3_column_grid') ) : ?>

  <section class="three-column-grid" style="background: <?php echo $bgColor; ?> url(<?php echo $bgImage[0]; ?>) center/cover">
    <div class="container">
      <div class="row row--justify-content-center">

        <?php if($intro): ?>
          <div class="col-12">
            <?php echo $intro; ?>
          </div>
        <?php endif; ?>

        <?php while( have_rows('3_column_grid') ) : the_row();
          $img = wp_get_attachment_image_src(get_sub_field('image'), '');
          $content = get_sub_field('content');
          $btnToggle = get_sub_field('button_toggle');
          $btnClass = get_sub_field('button_class');
          $btn = get_sub_field('button'); ?>

          <div class="col-4 md-col-5 sm-col-10 stretch <?php echo $lineClass; ?>">
            <div class="three-column-grid__column">
              <div>

                <?php if( $img ) : ?>
                  <div class="three-column-grid__img" style="background: url('<?php echo $img[0]; ?>') center/contain no-repeat"></div>
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

        <?php // Optional button
        if( $mainbtnToggle && $mainbtn ) : ?>

        <div class="text-<?php echo $mainbtnAlign; ?> sm-text-center">
          <a href="<?php echo esc_url($mainbtn['url']); ?>" class="button button--<?php echo $mainbtnClass; ?>" role="link" title="<?php echo $mainbtn['title']; ?>" target="<?php echo $mainbtn['target']; ?>">
            <?php echo $mainbtn['title']; ?>
          </a>
        </div>

      <?php endif; ?>

    </div>
  </section>

<?php endif; ?>
