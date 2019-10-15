<?php

/**
 *
 * ADDING CUSTOM WIDGET
 *
 */

function my_custom_dashboard_widgets()
{
  global $wp_meta_boxes;

  wp_add_dashboard_widget('custom_help_widget', 'Cyberize Group Notice', 'custom_dashboard_help');
}

function custom_dashboard_help()
{
  include(plugin_dir_path(__FILE__) . 'views/custom-widget-view.php');
}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');