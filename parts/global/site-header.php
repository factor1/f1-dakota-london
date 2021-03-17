<?php
/*
 * Site Header
 */

// Site Header Custom Fields
$logo = wp_get_attachment_image_src(get_field('header_logo', 'option'), 'logo');
?>

<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php // Logo ?>
        <a href="<?php echo esc_url(home_url()); ?>" class="site-header__logo">
          <img src="<?php echo $logo[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </a>

        <?php // Primary menu
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'nav--primary lg-only',
          )
        ); ?>

        <?php // Mobile nav button ?>
        <button class="menu-icon"><span></span></button>

      </div>
    </div>
  </div>

  <?php // Mobile menu
  wp_nav_menu(
    array(
      'theme_location' => 'mobile',
      'container' => 'nav',
      'container_class' => 'nav--mobile',
    )
  ); ?>
</header>
