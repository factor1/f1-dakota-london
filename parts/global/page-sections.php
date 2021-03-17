<?php
/*
 * Page Sections (Global)
 *
 * Template part used on various templates/views
 */

if( have_rows('page_sections') ) : while( have_rows('page_sections') ) : the_row();

  if( get_row_layout() == 'centered_text_block' ) :

    get_template_part('parts/global/centered-text-block');

  elseif( get_row_layout() == 'banner' ) :

    get_template_part('parts/global/banner');

  elseif( get_row_layout() == 'slider' ) :

    get_template_part('parts/global/slider');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == '3_column_grid' ) :

    get_template_part('parts/global/3-column-grid');

  elseif( get_row_layout() == 'newsletter_signup' ) :

    get_template_part('parts/global/newsletter-signup');

  endif;

endwhile; endif; ?>
