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
  background-color: darkslategray !important;
}

#login h1 a {
  background-image: url('/wp-content/uploads/2019/10/moose-oragebg.png');
  background-size: 150px 150px;
  height: 150px;
  width: 150px;
  border-radius: 20px;
}

.login #backtoblog a,
.login #nav a {
  color: white !important;
}
</style>

<?php
}

add_action('login_enqueue_scripts', 'cyberize_custom_logo');