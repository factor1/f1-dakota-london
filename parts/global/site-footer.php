<?php
/*
 * Site Footer
 */

// Site Footer Custom Fields
$logo = wp_get_attachment_image_src(get_field('footer_logo', 'option'), 'logo'); ?>

<footer class="site-footer">
  <div class="site-footer__top">
    <div class="container">
      <div class="row">
        <div class="col-12">

          <?php // Logo ?>
          <div class="site-footer__logo sm-text-center">
            <a href="<?php echo esc_url(home_url()); ?>">
              <img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </a>
          </div>

          <?php // Social menu
          prelude_social_menu(); ?>

        </div>
      </div>
    </div>
  </div>

  <div class="site-footer__main">
    <div class="container">
      <div class="row">

        <?php // Footer menu ?>
        <div class="col-12 sm-text-center">

          <?php wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'container' => 'nav',
              'container_class' => 'nav--footer'
            )
          ); ?>

        </div>

      </div>
    </div>
  </div>
</footer>
