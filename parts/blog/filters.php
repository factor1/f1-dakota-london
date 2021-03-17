<?php
/*
 * Filters (Blog)
 *
 * Template part used on index.php
 */

// Check if blog or category
$isBlog = is_home();
$isCat = is_category();

$slug = $isCat ? get_queried_object()->slug : '';

$cats = get_categories();

$active = $isBlog ? 'button--primary' : 'button--primary-ghost';

if( $cats ) : ?>

  <section class="index--filters">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="button <?php echo $active; ?>">All</a>

          <?php foreach( $cats as $cat ) :
           $catActive = $slug == $cat->slug ? 'button--primary' : 'button--primary-ghost'; ?>

            <a href="<?php echo get_category_link($cat); ?>" class="button <?php echo $catActive; ?>"><?php echo $cat->name; ?></a>

          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
