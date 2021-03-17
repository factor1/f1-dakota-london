<?php
/**
 * The default blog / index template.
 */

get_header();

get_template_part('parts/blog/hero');

get_template_part('parts/blog/filters');

get_template_part('parts/blog/post-list');

get_footer(); ?>
