<div class="settings-sections-wrp">
    <h2>Color Scheme</h2>
    <div class="setting-section">
        <?php esc_html_e('Primary color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-primary'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-primary]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Primary light color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-primary--light'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-primary--light]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Primary dark color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-primary--dark'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-primary--dark]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Secondary color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-secondary'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-secondary]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Secondary light color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-secondary--light'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-secondary--light]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Secondary dark color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-secondary--dark'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-secondary--dark]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Neutral color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-neutral'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-neutral]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Neutral light color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-neutral--light'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-neutral--light]" value="<?php echo esc_attr($value); ?>">
    </div>
    <div class="setting-section">
        <?php esc_html_e('Neutral dark color', 'text-domain'); ?>
        <?php $value = self::get_theme_option('clr-neutral--dark'); ?>
        <input class="color-picker" type="text" name="theme_options[clr-neutral--dark]" value="<?php echo esc_attr($value); ?>">
    </div>
</div>