<form method="post" action="options.php">
    <input type="hidden" name="action" value="wpse10500" />
    <?php settings_fields('theme_options'); ?>

    <div class="settings-sections-wrp">
        <h2>Text Sizes</h2>
        <p>Format: font-style(optional) font-variant(optional) font-weight font-size/line-height font-family(optional)</p>
        <p>Example: italic normal bold 12px/30px Georgia, serif;</p>
        <p>More info: <a href="https://www.w3schools.com/cssref/pr_font_font.asp">W3Schools</a></p>

        <div class="setting-section">
            <?php esc_html_e('Heading 1', 'text-domain'); ?>
            <?php $value = self::get_theme_option('h1-font-inp'); ?>
            <input id="h1-font-inp" type="text" name="theme_options[h1-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('h1-font-clr-inp'); ?>
            <input id="h1-font-clr-inp" class="color-picker" type="text" name="theme_options[h1-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <h1 id="h1-font">The quick brown fox jumps over the lazy dog.</h1>
        </div>
        <div class="setting-section">
            <?php esc_html_e('Heading 2', 'text-domain'); ?>
            <?php $value = self::get_theme_option('h2-font-inp'); ?>
            <input id="h2-font-inp" type="text" name="theme_options[h2-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('h2-font-clr-inp'); ?>
            <input id="h2-font-clr-inp" class="color-picker" type="text" name="theme_options[h2-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <h2 id="h2-font">The quick brown fox jumps over the lazy dog.</h2>
        </div>
        <div class="setting-section">
            <?php esc_html_e('Heading 3', 'text-domain'); ?>
            <?php $value = self::get_theme_option('h3-font-inp'); ?>
            <input id="h3-font-inp" type="text" name="theme_options[h3-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('h3-font-clr-inp'); ?>
            <input id="h3-font-clr-inp" class="color-picker" type="text" name="theme_options[h3-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <h3 id="h3-font">The quick brown fox jumps over the lazy dog.</h3>
        </div>
        <div class="setting-section">
            <?php esc_html_e('Heading 4', 'text-domain'); ?>
            <?php $value = self::get_theme_option('h4-font-inp'); ?>
            <input id="h4-font-inp" type="text" name="theme_options[h4-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('h4-font-clr-inp'); ?>
            <input id="h4-font-clr-inp" class="color-picker" type="text" name="theme_options[h4-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <h4 id="h4-font">The quick brown fox jumps over the lazy dog.</h4>
        </div>
        <div class="setting-section">
            <?php esc_html_e('Heading 5', 'text-domain'); ?>
            <?php $value = self::get_theme_option('h5-font-inp'); ?>
            <input id="h5-font-inp" type="text" name="theme_options[h5-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('h5-font-clr-inp'); ?>
            <input id="h5-font-clr-inp" class="color-picker" type="text" name="theme_options[h5-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <h5 id="h5-font">The quick brown fox jumps over the lazy dog.</h5>
        </div>
        <div class="setting-section">
            <?php esc_html_e('Paragraph', 'text-domain'); ?>
            <?php $value = self::get_theme_option('p-font-inp'); ?>
            <input id="p-font-inp" type="text" name="theme_options[p-font-inp]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
            <?php $value = self::get_theme_option('p-font-clr-inp'); ?>
            <input id="p-font-clr-inp" class="color-picker" type="text" name="theme_options[p-font-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateFontsLive(this)">

            <p id="p-font">The quick brown fox jumps over the lazy dog.</p>
        </div>
    </div>
    <div class="settings-sections-wrp">
        <h2>Color Scheme</h2>
        <div class="setting-section">
            <?php esc_html_e('Primary color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('primary-clr'); ?>
            <input class="color-picker" type="text" name="theme_options[primary-clr]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Primary light color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('primary-clr--light'); ?>
            <input class="color-picker" type="text" name="theme_options[primary-clr--light]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Primary dark color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('primary-clr--dark'); ?>
            <input class="color-picker" type="text" name="theme_options[primary-clr--dark]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Secondary color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('secondary-clr'); ?>
            <input class="color-picker" type="text" name="theme_options[secondary-clr]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Secondary light color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('secondary-clr--light'); ?>
            <input class="color-picker" type="text" name="theme_options[secondary-clr--light]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Secondary dark color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('secondary-clr--dark'); ?>
            <input class="color-picker" type="text" name="theme_options[secondary-clr--dark]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Neutral color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('neutral-clr'); ?>
            <input class="color-picker" type="text" name="theme_options[neutral-clr]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Neutral light color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('neutral-clr--light'); ?>
            <input class="color-picker" type="text" name="theme_options[neutral-clr--light]" value="<?php echo esc_attr($value); ?>">
        </div>
        <div class="setting-section">
            <?php esc_html_e('Neutral dark color', 'text-domain'); ?>
            <?php $value = self::get_theme_option('neutral-clr--dark'); ?>
            <input class="color-picker" type="text" name="theme_options[neutral-clr--dark]" value="<?php echo esc_attr($value); ?>">
        </div>
    </div>

    <?php submit_button(); ?>

</form>