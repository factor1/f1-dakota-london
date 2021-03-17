<?php
/*
 * Centered Text Block (Global)
 *
 * Template part used on various templates/views
 */

// Check if 404
$is404 = is_404();

// Centered Text Block Custom Fields
if( $is404 ) :
  $colSpan = 10;
  $content = get_field('404_content', 'option');
else :
  $colSpan = get_sub_field('centered_text_block_column_span');
  $content = get_sub_field('centered_text_block_content');
  $btnAlign = get_sub_field('centered_text_block_button_alignment');
endif; ?>

<section class="centered-text-block">
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $colSpan; ?> col-centered">

        <?php echo $content;

        // Optional buttons
        if( have_rows('centered_text_block_buttons') ) : ?>

          <div class="buttons text-<?php echo $btnAlign; ?>">

            <?php while( have_rows('centered_text_block_buttons') ) : the_row();
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
