<?php
/**
 * Template file for displaying blog post metadata
 */

// Meta data
$data = get_field('post_meta_data', get_option('page_for_posts'));

if( $data ) : ?>

  <div class="meta">
    <h6>

      <?php // Author
      if( $data[0] ) :

        the_author();

      endif;

      // Date
      if( $data[1] ) :

        echo ' | ' . get_the_date();

      endif;

      // Categories
      if( $data[2] ) :

        if( has_category() ) :

          echo '<br>Categories: ';

          the_category(', ');

        endif;

      endif;

      // Tags
      if( $data[3] ) :

        the_tags('<br>Tags: ');

      endif; ?>

    </h6>
  </div>

<?php endif; ?>
