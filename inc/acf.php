<?php
/*-----------------------------------------------------------------------------
  ACF Options
-----------------------------------------------------------------------------*/

// add option pages
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(
    array(
      'page_title' => 'Site Options',
      'position' => 4
    )
  );

}
