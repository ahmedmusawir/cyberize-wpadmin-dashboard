<?php

/**
 *
 * DEFAULT ADMIN WIDGET REMOVAL
 *
 */


function remove_dashboard_widgets()
{
  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
  remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
  remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
  remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
  remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
  remove_meta_box('dashboard_activity', 'dashboard', 'side'); // Activity
  remove_meta_box('rg_forms_dashboard', 'dashboard', 'side'); // Gravity form
  // use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');


// Removing the Welcome Widget

// remove_action('welcome_panel', 'wp_welcome_panel');