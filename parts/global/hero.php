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
$empty_class = $content == '' ? ' empty-hero' : '';
$images_toggle = get_field('hero_images_toggle');
$images = array_reverse(get_field('hero_images_repeater'));

$col_size = $images_toggle ? 5 : 12;

$banner_toggle = get_field('hero_banner_toggle');
$left_content = get_field('hero_banner_left_content');
$right_content = get_field('hero_banner_right_content');
$btnAlign = get_field('hero_button_alignment');

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

        <div class="col-7" data-aos="fade-up">

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

    <div class="container hero__banner" style="background-color: <?php echo $bgColor; ?> ;">
      <div class="row">
        <div class="col-6">
          <?php echo $left_content; ?>
        </div>
        <div class="col-6">
          <?php echo $right_content; ?>
        </div>
        <div class="col-12">

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
