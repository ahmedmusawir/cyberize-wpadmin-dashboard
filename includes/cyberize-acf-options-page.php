<?php

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Branding Details',
    'menu_title'  => 'Branding',
    'menu_slug'   => 'cg-branding',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'   => 'Admin Notice',
    'menu_title'  => 'Notice',
    'parent_slug'  => 'cg-branding',
  ));
}