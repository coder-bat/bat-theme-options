<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://coder-bat.com
 * @since      1.0.0
 *
 * @package    Bat_Theme_Options
 * @subpackage Bat_Theme_Options/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Bat_Theme_Options
 * @subpackage Bat_Theme_Options/admin
 * @author     Viral <darkbatsy@protonmail.com>
 */
class Bat_Theme_Options_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action('admin_menu', array('Bat_Theme_Options_Admin', 'add_admin_menu'));
		add_action('admin_init', array('Bat_Theme_Options_Admin', 'register_settings'));
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bat_Theme_Options_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bat_Theme_Options_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/bat-theme-options-admin.css', array(), $this->version, 'all');
		wp_enqueue_style('spectrum-css', plugin_dir_url(__FILE__) . 'css/spectrum.min.css', array(), $this->version, 'all');
	}

	/**
	 * Returns all theme options
	 *
	 * @since 1.0.0
	 */
	public static function get_theme_options()
	{
		return get_option('theme_options');
	}

	/**
	 * Returns single theme option
	 *
	 * @since 1.0.0
	 */
	public static function get_theme_option($id)
	{
		$options = self::get_theme_options();
		if (isset($options[$id])) {
			return $options[$id];
		}
	}

	/**
	 * sets single theme option
	 *
	 * @since 1.0.0
	 */
	public static function set_theme_option($id, $val)
	{
		$options = self::get_theme_options();
		// var_dump($options);
		$options[$id] = $val;
		update_option('theme_options', $options);
	}

	/**
	 * Add sub menu page
	 *
	 * @since 1.0.0
	 */
	public static function add_admin_menu()
	{
		add_menu_page(
			esc_html__('Bat Theme Settings', 'text-domain'),
			esc_html__('Bat Theme Settings', 'text-domain'),
			'manage_options',
			'bat-theme-settings',
			array('Bat_Theme_Options_Admin', 'create_admin_page')
		);
	}

	/**
	 * Register a setting and its sanitization callback.
	 *
	 * We are only registering 1 setting so we can store all options in a single option as
	 * an array. You could, however, register a new setting for each option
	 *
	 * @since 1.0.0
	 */
	public static function register_settings()
	{
		register_setting('theme_options', 'theme_options', array('Bat_Theme_Options_Admin', 'sanitize'));
	}

	/**
	 * Sanitization callback
	 *
	 * @since 1.0.0
	 */
	public static function sanitize($options)
	{
		// If we have options lets sanitize them
		if ($options) {
			foreach ($options as $key => &$value) {
				$value = sanitize_text_field($value);
			}
			return $options;
		}
	}

	public static function create_admin_page()
	{
		require_once(dirname(__FILE__) . '/partials/bat-theme-options-admin-display.php');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bat_Theme_Options_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bat_Theme_Options_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script('spectrum', plugin_dir_url(__FILE__) . 'js/spectrum.min.js', array('jquery'), $this->version, false);
	}
}

// Helper function to use in your theme to return a theme option value
function bat_get_theme_option($id = '')
{
	return Bat_Theme_Options_Admin::get_theme_option($id);
}

// Helper function to use in your theme to set a theme option value
function bat_set_theme_option($id = '', $val = '')
{
	return Bat_Theme_Options_Admin::set_theme_option($id, $val);
}

require_once(dirname(__FILE__) . '/partials/bat-theme-options-compiler.php');
