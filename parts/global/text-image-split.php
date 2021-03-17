<?php
/*
 * Text/Image Split (Global)
 *
 * Template part used on various templates/views
 */

// Text/Image Split Custom Fields
$layoutOption = get_sub_field('text_image_split_layout_option'); // img on left or right
$widthOption = get_sub_field('text_image_split_width_option'); // T/F full-width section
$marginOption = get_sub_field('text_image_split_margin_option'); // margin above & below section
$bgColor = get_sub_field('text_image_split_background_color');
$img = wp_get_attachment_image_src(get_sub_field('text_image_split_image'), 'text_image_split');
$content = get_sub_field('text_image_split_content');
$btnToggle = get_sub_field('text_image_split_button_toggle');
$btnAlign = get_sub_field('text_image_split_button_alignment');
$btnClass = get_sub_field('text_image_split_button_class');
$btn = get_sub_field('text_image_split_button');

// Conditional classes
$sectionClass = $marginOption ? ' with-margin' : '';
$rowClass = $layoutOption == 'left' ? ' row--reverse' : '';
$rowClass2 = $widthOption ? ' row--full-width' : ''; ?>

<section class="text-image-split<?php echo $sectionClass; ?>" style="background-color: <?php echo $bgColor; ?>;">
  <div class="container">
    <div class="row row--justify-content-end<?php echo $rowClass . $rowClass2; ?>">

      <?php // Text ?>
      <div class="col-6 text-image-split__text sm-text-center">
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
      <div class="col-6 stretch text-image-split__image" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>

    </div>
  </div>
</section>
