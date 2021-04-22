<div class="settings-sections-wrp">
    <h2>Text Sizes</h2>
    <p>Format: font-style(optional) font-variant(optional) font-weight font-size/line-height font-family(optional)</p>
    <p>Example: italic normal bold 12px/30px Georgia, serif;</p>
    <p>More info: <a href="https://www.w3schools.com/cssref/pr_font_font.asp">W3Schools</a></p>

    <div class="setting-section">
        <?php esc_html_e('Heading 1', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('h1-font'); ?>
        <input id="h1-font" type="text" name="theme_options[h1-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <h1 id="h1-font-sample">The quick brown fox jumps over the lazy dog.</h1>
    </div>
    <div class="setting-section">
        <?php esc_html_e('Heading 2', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('h2-font'); ?>
        <input id="h2-font" type="text" name="theme_options[h2-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <h2 id="h2-font-sample">The quick brown fox jumps over the lazy dog.</h2>
    </div>
    <div class="setting-section">
        <?php esc_html_e('Heading 3', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('h3-font'); ?>
        <input id="h3-font" type="text" name="theme_options[h3-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <h3 id="h3-font-sample">The quick brown fox jumps over the lazy dog.</h3>
    </div>
    <div class="setting-section">
        <?php esc_html_e('Heading 4', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('h4-font'); ?>
        <input id="h4-font" type="text" name="theme_options[h4-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <h4 id="h4-font-sample">The quick brown fox jumps over the lazy dog.</h4>
    </div>
    <div class="setting-section">
        <?php esc_html_e('Heading 5', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('h5-font'); ?>
        <input id="h5-font" type="text" name="theme_options[h5-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <h5 id="h5-font-sample">The quick brown fox jumps over the lazy dog.</h5>
    </div>
    <div class="setting-section">
        <?php esc_html_e('Paragraph', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('p-font'); ?>
        <input id="p-font" type="text" name="theme_options[p-font]" value="<?php echo esc_attr($value); ?>" oninput="updateFontsLive(this)">
        <p id="p-font-sample">The quick brown fox jumps over the lazy dog.</p>
    </div>
</div>