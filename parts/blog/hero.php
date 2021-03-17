<?php
/*
 * Hero (Blog)
 *
 * Template part used on index.php
 */

// Hero Custom Fields
$intro = get_field('blog_intro_text', get_option('page_for_posts')); ?>

<section class="index--hero">
  <div class="container">
    <div class="row">
      <div class="col-8 col-centered text-center">

        <?php echo $intro; ?>

      </div>
    </div>
  </div>
</section>
