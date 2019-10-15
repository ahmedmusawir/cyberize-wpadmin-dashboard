<?php
/*
* WP ADMIN SCREEN LOGO & FOOTER TEXT
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

function cyberize_admin_footer_text()
{
  // echo '<p>Cyberize Group Rules!! Visit us at <a href="https://cyberizegroup.com" target="_blank">CyberizeGroup.com</a></p>';

  echo '<p>' . the_field('admin_dashboard_footer_text', option) . '</p>';
}

add_filter('admin_footer_text', 'cyberize_admin_footer_text', 20);


function cyberize_admin_header_logo()
{
  // echo '<img src="' . plugins_url('/wp-content/uploads/2019/10/moose-oragebg.png', __FILE__) . '" />';
  echo '<img class="img-fluid mt-2" src="/wp-content/uploads/2019/10/moose-oragebg.png" />';
  // echo '<img class="img-fluid rounded-circle" src="/wp-content/uploads/2019/10/moose-oragebg.png" />';
}

// add_filter('admin_notices', 'cyberize_admin_header_logo', 20);