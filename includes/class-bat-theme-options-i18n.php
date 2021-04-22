<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://coder-bat.com
 * @since      1.0.0
 *
 * @package    Bat_Theme_Options
 * @subpackage Bat_Theme_Options/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bat_Theme_Options
 * @subpackage Bat_Theme_Options/includes
 * @author     Viral <darkbatsy@protonmail.com>
 */
class Bat_Theme_Options_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bat-theme-options',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
