<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://coder-bat.com
 * @since      1.0.0
 *
 * @package    Bat_Theme_Options
 * @subpackage Bat_Theme_Options/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h1><?php esc_html_e('Bat Theme Options', 'text-domain'); ?></h1>
    <p><?php esc_html_e('Update settings to see changes', 'text-domain'); ?></p>
    <nav class="nav-tab-wrapper">
        <button class="nav-tab nav-tab-active" data-show="tab-content--textSettings">Text</button>
        <button class="nav-tab" data-show="tab-content--colorSettings">Colors</button>
        <button class="nav-tab" data-show="tab-content--buttonSettings">Buttons</button>
    </nav>
    <form method="post" action="options.php">
        <?php settings_fields('theme_options'); ?>
        <?php
        echo '<div class="tab-content tab-content--colorSettings">';
        require_once(dirname(__FILE__) . '/tab-content/tab-color-settings.php');
        echo '</div>';

        echo '<div class="tab-content tab-content--buttonSettings">';
        require_once(dirname(__FILE__) . '/tab-content/tab-button-settings.php');
        echo '</div>';

        echo '<div class="tab-content tab-content--textSettings">';
        require_once(dirname(__FILE__) . '/tab-content/tab-text-settings.php');
        echo '</div>';
        ?>
        <?php submit_button(); ?>
        <button class="reset-options">Reset Options</button>
		<?php wp_enqueue_script('init_input', plugin_dir_url(__FILE__) . '../js/bat-theme-options-admin.js', array('jquery'), 1.0, false); ?>
    </form>
    <div class="reset-confirm"></div>
</div><!-- .wrap -->