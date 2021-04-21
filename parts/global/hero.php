<?php
/*
 * Hero (Global)
 *
 * Template part used on various templates/views
 */

// Hero Custom Fields
$bg = wp_get_attachment_image_src(get_field('hero_background'), 'hero');
$bgColor = get_field('hero_background_color');
$videoToggle = get_field('hero_video_toggle');
$video = get_field('hero_video');
$content = get_field('hero_content');
$images_toggle = get_field('hero_images_toggle');
$images = get_field('hero_images_repeater');
$banner_toggle = get_field('hero_banner_toggle');
$left_content = get_field('hero_banner_left_content');
$right_content = get_field('hero_banner_right_content');
$btnAlign = get_field('hero_button_alignment');

//extra container class
$empty_class = '';
$col_images = 7;
$col_size = $images_toggle ? 5 : 10;

if($images) {
  $images = array_reverse($images);
}

if( $content == '' && !$images_toggle ) {
  $empty_class = ' empty-hero';
} elseif ( $content == '' && $images_toggle ) {
  $empty_class = ' no-images';
  $col_images = 10;
} elseif ( $content != '' && !$images_toggle) {
  $empty_class = ' no-images';
}

?>

<section class="hero <?php echo $empty_class; ?>" style="background: <?php echo $bgColor; ?> url('<?php echo $bg[0]; ?>') center/cover no-repeat">

  <?php // Optional bg video
  if( $videoToggle && $video ) : ?>

    <div class="hero__video">
      <video autoplay loop muted>
        <source src="<?php echo $video; ?>" type="video/mp4">
      </video>
    </div>

  <?php endif; ?>

  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-<?php echo $col_size; ?>" data-aos="fade-up">

        <?php echo $content; ?>

      </div>

      <?php if($images_toggle): ?>

        <div class="col-<?php echo $col_images; ?>" data-aos="fade-up">

          <?php if($images) : ?>

            <div class="hero__images-container">

              <?php foreach ($images as $image):
                $image_file = wp_get_attachment_image_src($image['image'], 'large'); ?>
                <div class="single-image" style=" background: url(<?php echo $image_file[0]; ?>) center/cover"></div>
              <?php endforeach; ?>
              
            </div>

          <?php endif; ?>

        </div>

      <?php endif; ?>

    </div>
  </div>

  <?php if($banner_toggle): ?>

    <div class="container hero-banner" style="background-color: <?php echo $bgColor; ?> ;">
      <div class="row row--justify-content-center row--align-items-center">
        <div class="col-5 sm-text-center">
          <?php echo $left_content; ?>
        </div>
        <div class="col-5 sm-text-center">
          <?php echo $right_content; ?>
        </div>
      </div>
      <div class="row row--justify-content-center">
        <div class="col-10">

          <?php if( have_rows('hero_buttons') ) : ?>

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

  <?php endif; ?>


</section>
