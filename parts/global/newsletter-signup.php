<?php
/*
 * Newsletter Signup (Global)
 *
 * Template part used on various templates/views
 */

// Newsletter Signup Custom Fields
$intro = get_sub_field('newsletter_intro');
$form = get_sub_field('newsletter_form'); ?>

<section class="newsletter-signup">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php echo $intro; ?>

        <?php gravity_form($form['id'], false, false, false, false, true); ?>

      </div>
    </div>
  </div>
</section>
