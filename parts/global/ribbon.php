<?php
/*
 * Ribbon (Global)
 *
 * Template part used on various templates/views
 */

$ribbon_background_color = get_sub_field('ribbon_background_color');
$ribbon_layout_option = get_sub_field('ribbon_layout_option');
$ribbon_logo = wp_get_attachment_image_src(get_sub_field('ribbon_logo'), 'medium');
$ribbon_logo_alt = get_post_meta(get_sub_field('ribbon_logo'), '_wp_attachment_image_alt', true);
$ribbon_content = get_sub_field('ribbon_content');
$ribbon_mobile_toggle = get_sub_field('ribbon_mobile_toggle');
$mobileOnly = $ribbon_mobile_toggle ? ' sm-only' : '';
$rowClass = $ribbon_layout_option == 'left' ? ' row--reverse' : '';

?>

<section class="ribbon" style="background: <?php echo $ribbon_background_color; ?>;" >
  <div class="container">
    <div class="row <?php echo $rowClass; ?> row--align-items-center row--justify-content-center">
      <?php if($ribbon_content): ?>
        <div class="col-4 sm-col-8 ribbon__content <?php echo $mobileOnly; ?>">
          <?php echo $ribbon_content; ?>
        </div>
      <?php endif; ?>
      <div class="col-2 sm-col-4 text-center ribbon__image">
        <img src="<?php echo $ribbon_logo[0]; ?>" alt="<?php echo $ribbon_logo_alt; ?>">
      </div>
    </div>
  </div>
</section>