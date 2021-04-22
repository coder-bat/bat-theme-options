<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://coder-bat.com
 * @since             1.0.0
 * @package           Bat_Theme_Options
 *
 * @wordpress-plugin
 * Plugin Name:       Bat Theme Options
 * Plugin URI:        bat-theme-options
 * Description:       Adds theme options page in admin area.
 * Version:           1.0.0
 * Author:            Viral
 * Author URI:        https://coder-bat.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bat-theme-options
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BAT_THEME_OPTIONS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bat-theme-options-activator.php
 */
function activate_bat_theme_options() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bat-theme-options-activator.php';
	Bat_Theme_Options_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bat-theme-options-deactivator.php
 */
function deactivate_bat_theme_options() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bat-theme-options-deactivator.php';
	Bat_Theme_Options_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bat_theme_options' );
register_deactivation_hook( __FILE__, 'deactivate_bat_theme_options' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bat-theme-options.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bat_theme_options() {

	$plugin = new Bat_Theme_Options();
	$plugin->run();

}
run_bat_theme_options();
