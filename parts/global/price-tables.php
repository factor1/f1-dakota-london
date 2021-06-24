<?php
/*
 * Price table (Global)
 *
 * Template part used on various templates/views
 */

// Price table Custom Fields
$intro = get_sub_field('price_table_intro_content');
$bgImage = wp_get_attachment_image_src(get_sub_field('price_table_background_image'), 'full');
$mainbtnToggle = get_sub_field('price_table_button_toggle');
$mainbtnClass = get_sub_field('price_table_button_class');
$mainbtn = get_sub_field('price_table_button'); 

?>

<section class="price-tables" style="background: url(<?php echo $bgImage[0]; ?>) center/cover;">
  <div class="container">
    <div class="row row--justify-content-center">

      <?php if($intro): ?>
        <div class="col-12">
          <?php echo $intro; ?>
        </div>
      <?php endif; ?>

      <?php if( have_rows('price_tables') ) : ?>
        <div class="price-tables__container">
        
          <?php while( have_rows('price_tables') ) : the_row();
            $title = get_sub_field('table_title');
            $price = get_sub_field('table_price');
            $discounted_price = get_sub_field('table_discounted');
            $parts = explode('.', (string)$discounted_price);
            $part1 = $parts[0];
            $part2 = $parts[1];
            $btn = get_sub_field('table_link'); ?>

              <div class="price-tables__column">

                <div class="column_head">
                  <?php if( $title ) : ?>
                    <h3><?php echo $title; ?></h3>
                  <?php endif; ?>
                </div>

                <div class="column_price">
                  <?php if( $discounted_price && $price ) : ?>
                    <div class="discounted">
                      <?php echo '$'.$parts[0]; ?> <sup><?php echo $parts[1]; ?></sup>
                    </div>
                    <div class="full">
                      <s><?php echo '$'.$price; ?></s>
                    </div>
                  <?php endif; ?>
                </div>

                <div class="column_repeater">
                  <?php if( have_rows('table_content_rows') ) : ?>

                    <?php while( have_rows('table_content_rows') ) : the_row();
                      $text = get_sub_field('row_text'); ?>
                      <div class="repeater-item">
                        <?php echo $text; ?>
                      </div>  
                    <?php endwhile; ?>

                  <?php endif; ?>
                </div>

                <?php if( $btn ) : ?>
                  <div class="text-center">
                    <a href="<?php echo esc_url($btn['url']); ?>" class="button button--primary-ghost" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                      <?php echo $btn['title']; ?>
                    </a>
                  </div>
                <?php endif; ?>

              </div>

          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>

      <?php // Optional button
      if( $mainbtnToggle && $mainbtn ) : ?>

      <div class="text-<?php echo $mainbtnAlign; ?> sm-text-center">
        <a href="<?php echo esc_url($mainbtn['url']); ?>" class="button button--<?php echo $mainbtnClass; ?>" role="link" title="<?php echo $mainbtn['title']; ?>" target="<?php echo $mainbtn['target']; ?>">
          <?php echo $mainbtn['title']; ?>
        </a>
      </div>

    <?php endif; ?>

  </div>

</section>