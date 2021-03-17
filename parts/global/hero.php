<?php
/*
 * Hero (Global)
 *
 * Template part used on various templates/views
 */

// Hero Custom Fields
$bg = wp_get_attachment_image_src(get_field('hero_background'), 'hero');
$hAlign = get_field('hero_horizontal_background_alignment'); // bg horizontal alignment
$vAlign = get_field('hero_vertical_background_alignment'); // bg vertical alignment
$colSpan = get_field('hero_column_span');
$colAlign = get_field('hero_column_alignment');
$videoToggle = get_field('hero_video_toggle');
$video = get_field('hero_video');
$content = get_field('hero_content');
$btnAlign = get_field('hero_button_alignment'); // left, center, or right ?>

<section class="hero" style="background: url('<?php echo $bg[0]; ?>') <?php echo $hAlign . ' ' . $vAlign; ?>/cover no-repeat">

  <?php // Optional bg video
  if( $videoToggle && $video ) : ?>

    <div class="hero__video">
      <video autoplay loop muted>
        <source src="<?php echo $video; ?>" type="video/mp4">
      </video>
    </div>

  <?php endif; ?>

  <div class="container">
    <div class="row row--justify-content-<?php echo $colAlign; ?>">
      <div class="col-<?php echo $colSpan; ?>" data-aos="fade-up">

        <?php echo $content;

        // Optional buttons
        if( have_rows('hero_buttons') ) : ?>

          <div class="buttons text-<?php echo $btnAlign; ?>">

            <?php while( have_rows('hero_buttons') ) : the_row();
              $btnClass = get_sub_field('button_class');
              $btn = get_sub_field('button'); ?>

              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
