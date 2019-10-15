<?php

// Conditionally load CSS on plugin settings pages only
function wpplugin_admin_styles($hook)
{
  // LOADING BOOTSTRAP 4 ON THE WP ADMIN SIDE
  wp_register_style(
    'wpplugin-admin-bootstrap',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
    [],
    time()
  );

  wp_enqueue_style('wpplugin-admin-bootstrap');

  // LOADING MAIN PLUGIN ADMIN SIDE STYLES
  wp_register_style(
    'wpplugin-admin',
    CG_DASHBOARD_URL . 'admin/css/admin-styles.css',
    [],
    time()
  );

  wp_enqueue_style('wpplugin-admin');
}
add_action('admin_enqueue_scripts', 'wpplugin_admin_styles');


// Load CSS on the frontend
// function cgplugin_frontend_styles() {

//   wp_register_style(
//     'cgplugin-frontend',
//     CGPLUGIN_URL . 'frontend/css/cgplugin-frontend-style.css',
//     [],
//     time()
//   );

//   // if( is_single() ) {
//       wp_enqueue_style( 'cgplugin-frontend' );
//   // }

// }
// add_action( 'wp_enqueue_scripts', 'cgplugin_frontend_styles', 100 );