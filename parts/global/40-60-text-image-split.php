<?php
/*
 * 40/60 Text/Image Split (Global)
 *
 * Template part used on various templates/views
 */

// Text/Image Split Custom Fields
$layoutOption = get_sub_field('forty_sixty_text_image_split_layout_option'); // img on left or right
$bgImage = wp_get_attachment_image_src(get_sub_field('forty_sixty_text_image_split_background_image'), 'large');
$img = wp_get_attachment_image_src(get_sub_field('forty_sixty_text_image_split_image'), 'large');
$content = get_sub_field('forty_sixty_text_image_split_content');
$btnToggle = get_sub_field('forty_sixty_text_image_split_button_toggle');
$btnAlign = get_sub_field('forty_sixty_text_image_split_button_alignment');
$btnClass = get_sub_field('forty_sixty_text_image_split_button_class');
$btn = get_sub_field('forty_sixty_text_image_split_button');

// Conditional classes
$rowClass = $layoutOption == 'left' ? ' row--reverse' : ''; ?>

<section class="forty-sixty-text-image-split" style="background: url(<?php echo $bgImage[0]; ?>) center/cover no-repeat;">
  <div class="container">
    <div class="row row--justify-content-center <?php echo $rowClass; ?> row--full-width">

      <?php // Text ?>
      <div class="col-7 md-col-6 forty-sixty-text-image-split__text sm-text-center">
        <div>

          <?php echo $content;

          // Optional button
          if( $btnToggle && $btn ) : ?>

            <div class="text-<?php echo $btnAlign; ?> sm-text-center">
              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>
            </div>

          <?php endif; ?>

        </div>
      </div>


      <?php // Image ?>
      <div class="col-4 md-col-6 stretch forty-sixty-text-image-split__image">
        <img src="<?php echo $img[0]; ?>" alt="Image">
      </div>

    </div>
  </div>
</section>
