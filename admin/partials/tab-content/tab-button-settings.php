<div class="settings-sections-wrp">
    <h2>Button styles</h2>

    <div class="setting-section">
        <h2>Button primary</h2>
        <?php esc_html_e('Border', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-border'); ?>
        <input data-css-attr="border" data-el=".btn-primary--sample" type="text" name="theme_options[btn-primary-border]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-border-clr'); ?>
        <input data-css-attr="border-color" data-el=".btn-primary--sample" class="color-picker" type="text" name="theme_options[btn-primary-border-clr]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Border - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-border--hover'); ?>
        <input data-css-attr="border" data-el=".btn-primary--sample--hover" type="text" name="theme_options[btn-primary-border--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-border-clr--hover'); ?>
        <input data-css-attr="border-color" data-el=".btn-primary--sample--hover" class="color-picker" type="text" name="theme_options[btn-primary-border-clr--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-text'); ?>
        <input data-css-attr="font" data-el=".btn-primary--sample" type="text" name="theme_options[btn-primary-text]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-text-clr'); ?>
        <input data-css-attr="color" data-el=".btn-primary--sample" class="color-picker" type="text" name="theme_options[btn-primary-text-clr]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-text--hover'); ?>
        <input data-css-attr="font" data-el=".btn-primary--sample--hover" type="text" name="theme_options[btn-primary-text--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-text-clr--hover'); ?>
        <input data-css-attr="color" data-el=".btn-primary--sample--hover" class="color-picker" type="text" name="theme_options[btn-primary-text-clr--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-bg-clr'); ?>
        <input data-css-attr="background-color" data-el=".btn-primary--sample" class="color-picker" type="text" name="theme_options[btn-primary-bg-clr]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-bg-clr--hover'); ?>
        <input data-css-attr="background-color" data-el=".btn-primary--sample--hover" class="color-picker" type="text" name="theme_options[btn-primary-text-clr--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Padding (left, right, top, bottom)', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-primary-padding-left'); ?>
        <input data-css-attr="padding-left" data-el=".btn-primary--sample, .btn-primary--sample--hover" type="text" name="theme_options[btn-primary-padding-left]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-padding-right'); ?>
        <input data-css-attr="padding-right" data-el=".btn-primary--sample, .btn-primary--sample--hover" type="text" name="theme_options[btn-primary-padding-right]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-padding-top'); ?>
        <input data-css-attr="padding-top" data-el=".btn-primary--sample, .btn-primary--sample--hover" type="text" name="theme_options[btn-primary-padding-top]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-primary-padding-bottom'); ?>
        <input data-css-attr="padding-bottom" data-el=".btn-primary--sample, .btn-primary--sample--hover" type="text" name="theme_options[btn-primary-padding-bottom]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <br />
        <button class="sample-btn btn-primary--sample">Test button</button>
        <button class="sample-btn btn-primary--sample--hover">Test button on Hover</button>
    </div>
    <div class="setting-section">
        <h2>Button secondary</h2>
        <?php esc_html_e('Border', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-border'); ?>
        <input data-css-attr="border" data-el=".btn-secondary--sample" type="text" name="theme_options[btn-secondary-border]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-border-clr-inp'); ?>
        <input data-css-attr="border-color" data-el=".btn-secondary--sample" class="color-picker" type="text" name="theme_options[btn-secondary-border-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Border - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-border--hover'); ?>
        <input data-css-attr="border" data-el=".btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-border--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-border-clr-inp--hover'); ?>
        <input data-css-attr="border-color" data-el=".btn-secondary--sample--hover" class="color-picker" type="text" name="theme_options[btn-secondary-border-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-text'); ?>
        <input data-css-attr="font" data-el=".btn-secondary--sample" type="text" name="theme_options[btn-secondary-text]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-text-clr-inp'); ?>
        <input data-css-attr="color" data-el=".btn-secondary--sample" class="color-picker" type="text" name="theme_options[btn-secondary-text-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-text--hover'); ?>
        <input data-css-attr="font" data-el=".btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-text--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-text-clr-inp--hover'); ?>
        <input data-css-attr="color" data-el=".btn-secondary--sample--hover" class="color-picker" type="text" name="theme_options[btn-secondary-text-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-bg-clr-inp'); ?>
        <input data-css-attr="background-color" data-el=".btn-secondary--sample" class="color-picker" type="text" name="theme_options[btn-secondary-bg-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-bg-clr-inp--hover'); ?>
        <input data-css-attr="background-color" data-el=".btn-secondary--sample--hover" class="color-picker" type="text" name="theme_options[btn-secondary-text-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Padding (left, right, top, bottom)', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-secondary-padding-left'); ?>
        <input data-css-attr="padding-left" data-el=".btn-secondary--sample, .btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-padding-left]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-padding-right'); ?>
        <input data-css-attr="padding-right" data-el=".btn-secondary--sample, .btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-padding-right]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-padding-top'); ?>
        <input data-css-attr="padding-top" data-el=".btn-secondary--sample, .btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-padding-top]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-secondary-padding-bottom'); ?>
        <input data-css-attr="padding-bottom" data-el=".btn-secondary--sample, .btn-secondary--sample--hover" type="text" name="theme_options[btn-secondary-padding-bottom]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <br />
        <button class="sample-btn btn-secondary--sample">Test button</button>
        <button class="sample-btn btn-secondary--sample--hover">Test button on Hover</button>
    </div>
    <div class="setting-section">
        <h2>Button tertiary</h2>
        <?php esc_html_e('Border', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-border'); ?>
        <input data-css-attr="border" data-el=".btn-tertiary--sample" type="text" name="theme_options[btn-tertiary-border]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-border-clr-inp'); ?>
        <input data-css-attr="border-color" data-el=".btn-tertiary--sample" class="color-picker" type="text" name="theme_options[btn-tertiary-border-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Border - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-border--hover'); ?>
        <input data-css-attr="border" data-el=".btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-border--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-border-clr-inp--hover'); ?>
        <input data-css-attr="border-color" data-el=".btn-tertiary--sample--hover" class="color-picker" type="text" name="theme_options[btn-tertiary-border-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-text'); ?>
        <input data-css-attr="font" data-el=".btn-tertiary--sample" type="text" name="theme_options[btn-tertiary-text]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-text-clr-inp'); ?>
        <input data-css-attr="color" data-el=".btn-tertiary--sample" class="color-picker" type="text" name="theme_options[btn-tertiary-text-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Text - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-text--hover'); ?>
        <input data-css-attr="font" data-el=".btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-text--hover]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-text-clr-inp--hover'); ?>
        <input data-css-attr="color" data-el=".btn-tertiary--sample--hover" class="color-picker" type="text" name="theme_options[btn-tertiary-text-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-bg-clr-inp'); ?>
        <input data-css-attr="background-color" data-el=".btn-tertiary--sample" class="color-picker" type="text" name="theme_options[btn-tertiary-bg-clr-inp]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Background - Hover', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-bg-clr-inp--hover'); ?>
        <input data-css-attr="background-color" data-el=".btn-tertiary--sample--hover" class="color-picker" type="text" name="theme_options[btn-tertiary-text-clr-inp--hover]" value="<?php echo esc_attr($value); ?>" onchange="updateBtnLive(this)">
        <br />
        <?php esc_html_e('Padding (left, right, top, bottom)', 'text-domain'); ?>
        <?php $value = bat_get_theme_option('btn-tertiary-padding-left'); ?>
        <input data-css-attr="padding-left" data-el=".btn-tertiary--sample, .btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-padding-left]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-padding-right'); ?>
        <input data-css-attr="padding-right" data-el=".btn-tertiary--sample, .btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-padding-right]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-padding-top'); ?>
        <input data-css-attr="padding-top" data-el=".btn-tertiary--sample, .btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-padding-top]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <?php $value = bat_get_theme_option('btn-tertiary-padding-bottom'); ?>
        <input data-css-attr="padding-bottom" data-el=".btn-tertiary--sample, .btn-tertiary--sample--hover" type="text" name="theme_options[btn-tertiary-padding-bottom]" value="<?php echo esc_attr($value); ?>" oninput="updateBtnLive(this)">
        <br />
        <button class="sample-btn btn-tertiary--sample">Test button</button>
        <button class="sample-btn btn-tertiary--sample--hover">Test button on Hover</button>
    </div>
</div>