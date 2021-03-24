<?php
/*
 * 3 Image section (Global)
 *
 * Template part used on various templates/views
 */

// 3 Image section Custom Fields
$image_1 = wp_get_attachment_image_src(get_sub_field('3_img_first_image'), 'full');
$image_2 = wp_get_attachment_image_src(get_sub_field('3_img_second_image'), 'full');
$image_3 = wp_get_attachment_image_src(get_sub_field('3_img_third_image'), 'full');
$content = get_sub_field('3_img_content');
$btnToggle = get_sub_field('3_img_button_toggle');
$btnClass = get_sub_field('3_img_button_class');
$btn = get_sub_field('3_img_button'); ?>

<section class="three-image-section">
  <div class="container">
    <div class="row">
      <div class="col-7 text-right sm-text-center three-image-section__img-1">
        <img src="<?php echo $image_1[0]; ?>" alt="Gallery 1">
      </div>
      <div class="col-5 sm-text-center three-image-section__img-2">
        <img src="<?php echo $image_2[0]; ?>" alt="Gallery 2">
      </div>
    </div>
    <div class="row row--reverse">
      <div class="col-8 sm-text-center three-image-section__img-3">
        <img src="<?php echo $image_3[0]; ?>" alt="Gallery 3">
      </div>
      <div class="col-4 sm-text-center">
        <?php echo $content; ?>
        <?php if( $btnToggle && $btn ) : ?>

          <div class="text-center">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>