<?php
/*
 * 50/50 Text Split (Global)
 *
 * Template part used on various templates/views
 */

// 50/50 text split Custom Fields
$background_color = get_sub_field('text_split_background_color');
$background_image = wp_get_attachment_image_src(get_sub_field('text_split_background_image'), 'full');
$left_content = get_sub_field('text_split_left_content');
$left_background = get_sub_field('text_split_left_column_background_color');
$right_content = get_sub_field('text_split_right_content');
$right_background = get_sub_field('text_split_right_column_background_color');
$btnToggle = get_sub_field('text_split_button_toggle');
$btnAlign = get_sub_field('text_split_button_alignment');
$btnClass = get_sub_field('text_split_button_class');
$btn = get_sub_field('text_split_button');
?>

<section class="text-split" style="background: <?php echo $background_color; ?> url(<?php echo $background_image[0]; ?>) center/cover;">
  <div class="container">
    <div class="row row--justify-content-center">

      <?php if($left_content): ?>
        <div class="col-5" style="background: <?php echo $left_background; ?>;">
          <?php echo $left_content; ?>
        </div>
      <?php endif; ?>

      <?php if($right_content): ?>
        <div class="col-5" style="background: <?php echo $right_background; ?>;">
          <?php echo $right_content; ?>
        </div>
      <?php endif; ?>

      <?php // Optional button
        if( $btnToggle && $btn ) : ?>
        <div class="col-12">
          <div class="text-<?php echo $btnAlign; ?>">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>