<?php
/*
 * 50/50 Text Split (Global)
 *
 * Template part used on various templates/views
 */

 // 50/50 text split Custom Fields
$left_content = get_sub_field('text_split_left_content');
$right_content = get_sub_field('text_split_right_content');
$btnToggle = get_sub_field('text_split_button_toggle');
$btnAlign = get_sub_field('text_split_button_alignment');
$btnClass = get_sub_field('text_split_button_class');
$btn = get_sub_field('text_split_button');
?>

<section class="text-split">
  <div class="container">
    <div class="row row--justify-content-center">

      <?php if($left_content): ?>
        <div class="col-5">
          <?php echo $left_content; ?>
        </div>
      <?php endif; ?>

      <?php if($right_content): ?>
        <div class="col-5">
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