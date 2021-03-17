<?php
/*
 * Banner (Global)
 *
 * Template part used on various templates/views
 */

// Banner Custom Fields
$bg = wp_get_attachment_image_src(get_sub_field('banner_background'), 'banner');
$width = get_sub_field('banner_width_option'); // T/F full-width
$padding = get_sub_field('banner_padding');
$hAlign = get_sub_field('banner_horizontal_background_alignment');
$vAlign = get_sub_field('banner_vertical_background_alignment');
$colSpan = get_sub_field('banner_column_span');
$content = get_sub_field('banner_content');
$btnToggle = get_sub_field('banner_button_toggle');
$btnAlign = get_sub_field('banner_button_alignment');
$btnClass = get_sub_field('banner_button_class');
$btn = get_sub_field('banner_button');

// Conditional classes/styles
$bgStyle = ' style="background: url(' . $bg[0] . ') ' . $hAlign . ' ' . $vAlign . '/cover no-repeat; padding: ' . $padding . 'px 0;"';
$sectionStyle = $width ? $bgStyle : '';
$colStyle = $width ? '' : $bgStyle; ?>

<section class="banner"<?php echo $sectionStyle; ?>>
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $colSpan; ?> col-centered"<?php echo $colStyle; ?>>

        <?php echo $content;

        // Optional button
        if( $btnToggle && $btn ) : ?>

          <div class="text-<?php echo $btnAlign; ?>">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
