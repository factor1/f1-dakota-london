<?php
/*
 * Site Footer
 */

// Site Footer Custom Fields
$logo = wp_get_attachment_image_src(get_field('footer_logo', 'option'), 'medium');
$content = get_field('footer_content', 'option');
?>

<footer class="site-footer">
  <div class="site-footer__top">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <?php // Logo ?>
          <div class="site-footer__logo text-center">
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </a>
          </div>
        </div>

        <div class="col-12">
          <?php // Social menu
          prelude_social_menu(); ?>
        </div>

        <?php if($content): ?>
          <div class="col-12">
            <div class="site-footer__content">
              <?php echo $content; ?>
            </div>
          </div>
        <?php endif; ?>

        <div class="col-12 site-footer__copyright text-center">
          <p>Copyright ©<?php echo Date('Y'); ?> Dakota London. All Rights Reserved. Site by factor1</p>
        </div>

      </div>
    </div>
  </div>

</footer>
