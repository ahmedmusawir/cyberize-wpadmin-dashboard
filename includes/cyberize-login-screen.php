<?php
/*
* WP ADMIN SCREEN CUSTOMIZATION
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

// WP LOGIN SCREEN LOGO
function cyberize_custom_logo()
{ ?>

<style>
body {
  background-color: <?php the_field('admin_login_screen_background_color', option) ?> !important;
}

#login h1 a {
  background-image: url(<?php the_field('admin_login_screen_custom_logo', option) ?>);
  /* background-size: 150px 150px;
  height: 150px;
  width: 150px; */
  border-radius: 20px;
}

.login #backtoblog a,
.login #nav a {
  color: <?php the_field('admin_login_screen_text_color', option) ?> !important;
}
</style>

<?php
}

add_action('login_enqueue_scripts', 'cyberize_custom_logo');