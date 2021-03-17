<?php
/*
 * Template Name: Styleguide
 *
 * Template used on the styleguide
 */

get_header(); ?>

<style>
  .styleguide .container {
    padding: 100px 0;
  }

  .styleguide .bg {
    padding: 20px;
  }
</style>

<section class="styleguide">
  <div class="container">
    <div class="row row--justify-content-center">
      <div class="col-10">
        <div class="bg">

        </div>

        <h1>Heading 1</h1>

        <h2>Heading 2</h2>

        <h3>Heading 3</h3>

        <h4>Heading 4</h4>

        <h5>Heading 5</h5>

        <h6>Heading 6</h6>

        <p>Lorem ipsum dolor <a href="#">sit amet</a>, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>

        <div class="buttons">
          <button class="button button--primary">Button Primary</button>

          <button class="button button--primary-ghost">Button Primary (Ghost)</button>

          <button class="button button--secondary">Button Secondary</button>

          <button class="button button--secondary-ghost">Button Secondary (Ghost)</button>

          <button class="button button--white">Button White</button>

          <button class="button button--white-ghost">Button White (Ghost)</button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
