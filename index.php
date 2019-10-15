<?php
/*
Plugin Name: CG WPAdmin Dashboard Branding
Plugin URI: https://cyberizegroup.com/
Description: Displays Property Category List, Google Map etc. via Shortcodes
Version: 1.0
Author: Cyberize Group
Author URI: https://cyberizegroup.com/
License: GPLv2 or later
Text Domain: cyberizeframework
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

define('CG_DASHBOARD_URL', plugin_dir_url(__FILE__));

/**
 * ALL CSS AND JS SCRIPTS
 */
// Enqueue Plugin CSS
include(plugin_dir_path(__FILE__) . 'includes/cyberize-styles.php');

// Enqueue Plugin JavaScript
// include( plugin_dir_path( __FILE__ ) . 'includes/property-shortcodes-scripts.php');

/**
 * ALL ACF CODE 
 */
// Create Single Property ACF Fields
include(plugin_dir_path(__FILE__) . 'includes/cyberize-acf-options-page.php');
include(plugin_dir_path(__FILE__) . 'includes/cyberize-acf-custom.php');

/**
 * ALL WP DASHBOARD CODE
 */
// Removing Default Admin Widgets
include(plugin_dir_path(__FILE__) . 'includes/cyberize-remove-defaults.php');

// Removing & Replacing Default Welcome Widgets
include(plugin_dir_path(__FILE__) . 'includes/cyberize-add-custom-welcome.php');

// Adding Custom Widget
include(plugin_dir_path(__FILE__) . 'includes/cyberize-add-custom-widget.php');

// Updating WP Admin Login Screen
include(plugin_dir_path(__FILE__) . 'includes/cyberize-login-screen.php');

// Changing the Admin Screen Footer Text
include(plugin_dir_path(__FILE__) . 'includes/cyberize-admin-logo-n-footer.php');