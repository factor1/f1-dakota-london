<?php
/*
 * Hero (Global)
 *
 * Template part used on various templates/views
 */

// Hero Custom Fields
$bg = wp_get_attachment_image_src(get_field('hero_background'), '');
$height = get_field('hero_height');
$hAlign = get_field('banner_horizontal_background_alignment');
$vAlign = get_field('banner_vertical_background_alignment');
$padding = get_field('banner_padding');
$bgColor = get_field('hero_background_color');
$videoToggle = get_field('hero_video_toggle');
$video = get_field('hero_video');
$content = get_field('hero_content');
$single_btn_toggle = get_field('hero_single_button_toggle');
$single_btn_class = get_field('hero_single_button_class');
$single_btn_alignment = get_field('hero_single_button_alignment');
$single_btn = get_field('hero_single_button');
$images_toggle = get_field('hero_images_toggle');
$images = get_field('hero_images_repeater');
$banner_toggle = get_field('hero_banner_toggle');
$left_content = get_field('hero_banner_left_content');
$right_content = get_field('hero_banner_right_content');
$btnAlign = get_field('hero_button_alignment');

//extra container class
$empty_class = '';
$col_images = 7;
$col_size = $images_toggle ? 5 : 12;

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

<section class="hero <?php echo $empty_class; ?>" style="min-height:<?php echo $height; ?>vh; background: <?php echo $bgColor; ?> url('<?php echo $bg[0]; ?>') <?php echo $vAlign;?>  <?php echo $hAlign; ?> /cover no-repeat">

  <?php // Optional bg video
  if( $videoToggle && $video ) : ?>

    <div class="hero__video">
      <video autoplay loop muted>
        <source src="<?php echo $video; ?>" type="video/mp4">
      </video>
    </div>

  <?php endif; ?>

  <div class="container">
    <div class="row row--justify-content-center" style="padding:<?php echo $padding;?>px 0;">
	    
      <div class="col-<?php echo $col_size; ?>" data-aos="fade-up" >
	  <div style="display:block;  height:1px; ">&nbsp;</div>
	  
	  	<style>hero h1 {text-shadow: 0px 0px 4px #000 !important}</style>
        <?php echo $content; ?>

        <?php if($single_btn_toggle && $single_btn): ?>
          <div class="text-<?php echo $single_btn_alignment.$empty_class; ?> sm-text-center">
            <a href="<?php echo esc_url($single_btn['url']); ?>" class="button button--<?php echo $single_btn_class; ?>" role="link" title="<?php echo $single_btn['title']; ?>" target="<?php echo $single_btn['target']; ?>">
              <?php echo $single_btn['title']; ?>
            </a>
          </div>
        <?php endif; ?>

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

    <div class="container hero-banner" style="background-color: <?php echo $bgColor; ?> ; position: absolute; bottom:0px;">
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
