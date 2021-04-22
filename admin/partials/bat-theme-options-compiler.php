<?php require_once(dirname(__FILE__) . '/scssphp/scss.inc.php');

function compile_scss()
{
	$compiler = new ScssPhp\ScssPhp\Compiler();

	$source_scss = get_stylesheet_directory() . '/scss/main.scss';
	$scssContents = file_get_contents($source_scss);
	$import_path = get_stylesheet_directory() . '/scss';
	$compiler->addImportPath($import_path);
	$target_css = get_stylesheet_directory() . '/style.css';

	$variables = [
		'$h1-font' => bat_get_theme_option('h1-font'),
		'$h2-font' => bat_get_theme_option('h2-font'),
		'$h3-font' => bat_get_theme_option('h3-font'),
		'$h4-font' => bat_get_theme_option('h4-font'),
		'$h5-font' => bat_get_theme_option('h5-font'),
		'$p-font' => bat_get_theme_option('p-font'),
		'$clr-primary' => bat_get_theme_option('clr-primary'),
		'$clr-primary--light' => bat_get_theme_option('clr-primary--light'),
		'$clr-primary--dark' => bat_get_theme_option('clr-primary--dark'),
		'$clr-secondary' => bat_get_theme_option('clr-secondary'),
		'$clr-secondary--light' => bat_get_theme_option('clr-secondary--light'),
		'$clr-secondary--dark' => bat_get_theme_option('clr-secondary--dark'),
		'$clr-neutral' => bat_get_theme_option('clr-neutral'),
		'$clr-neutral--light' => bat_get_theme_option('clr-neutral--light'),
		'$clr-neutral--dark' => bat_get_theme_option('clr-neutral--dark'),
		'$btn-primary-border' => bat_get_theme_option('btn-primary-border'),
		'$btn-primary-border-clr' => bat_get_theme_option('btn-primary-border-clr'),
		'$btn-primary-border--hover' => bat_get_theme_option('btn-primary-border--hover'),
		'$btn-primary-border-clr--hover' => bat_get_theme_option('btn-primary-border-clr--hover'),
		'$btn-primary-text' => bat_get_theme_option('btn-primary-text'),
		'$btn-primary-text-clr' => bat_get_theme_option('btn-primary-text-clr'),
		'$btn-primary-text--hover' => bat_get_theme_option('btn-primary-text--hover'),
		'$btn-primary-text-clr--hover' => bat_get_theme_option('btn-primary-text-clr--hover'),
		'$btn-primary-bg-clr' => bat_get_theme_option('btn-primary-bg-clr'),
		'$btn-primary-bg-clr--hover' => bat_get_theme_option('btn-primary-bg-clr--hover'),
		'$btn-primary-padding-left' => bat_get_theme_option('btn-primary-padding-left'),
		'$btn-primary-padding-right' => bat_get_theme_option('btn-primary-padding-right'),
		'$btn-primary-padding-top' => bat_get_theme_option('btn-primary-padding-top'),
		'$btn-primary-padding-bottom' => bat_get_theme_option('btn-primary-padding-bottom'),
		'$btn-secondary-border' => bat_get_theme_option('btn-secondary-border'),
		'$btn-secondary-border-clr' => bat_get_theme_option('btn-secondary-border-clr'),
		'$btn-secondary-border--hover' => bat_get_theme_option('btn-secondary-border--hover'),
		'$btn-secondary-border-clr--hover' => bat_get_theme_option('btn-secondary-border-clr--hover'),
		'$btn-secondary-text' => bat_get_theme_option('btn-secondary-text'),
		'$btn-secondary-text-clr' => bat_get_theme_option('btn-secondary-text-clr'),
		'$btn-secondary-text--hover' => bat_get_theme_option('btn-secondary-text--hover'),
		'$btn-secondary-text-clr--hover' => bat_get_theme_option('btn-secondary-text-clr--hover'),
		'$btn-secondary-bg-clr' => bat_get_theme_option('btn-secondary-bg-clr'),
		'$btn-secondary-bg-clr--hover' => bat_get_theme_option('btn-secondary-bg-clr--hover'),
		'$btn-secondary-padding-left' => bat_get_theme_option('btn-secondary-padding-left'),
		'$btn-secondary-padding-right' => bat_get_theme_option('btn-secondary-padding-right'),
		'$btn-secondary-padding-top' => bat_get_theme_option('btn-secondary-padding-top'),
		'$btn-secondary-padding-bottom' => bat_get_theme_option('btn-secondary-padding-bottom'),
		'$btn-tertiary-border' => bat_get_theme_option('btn-tertiary-border'),
		'$btn-tertiary-border-clr' => bat_get_theme_option('btn-tertiary-border-clr'),
		'$btn-tertiary-border--hover' => bat_get_theme_option('btn-tertiary-border--hover'),
		'$btn-tertiary-border-clr--hover' => bat_get_theme_option('btn-tertiary-border-clr--hover'),
		'$btn-tertiary-text' => bat_get_theme_option('btn-tertiary-text'),
		'$btn-tertiary-text-clr' => bat_get_theme_option('btn-tertiary-text-clr'),
		'$btn-tertiary-text--hover' => bat_get_theme_option('btn-tertiary-text--hover'),
		'$btn-tertiary-text-clr--hover' => bat_get_theme_option('btn-tertiary-text-clr--hover'),
		'$btn-tertiary-bg-clr' => bat_get_theme_option('btn-tertiary-bg-clr'),
		'$btn-tertiary-bg-clr--hover' => bat_get_theme_option('btn-tertiary-bg-clr--hover'),
		'$btn-tertiary-padding-left' => bat_get_theme_option('btn-tertiary-padding-left'),
		'$btn-tertiary-padding-right' => bat_get_theme_option('btn-tertiary-padding-right'),
		'$btn-tertiary-padding-top' => bat_get_theme_option('btn-tertiary-padding-top'),
		'$btn-tertiary-padding-bottom' => bat_get_theme_option('btn-tertiary-padding-bottom')
	];

	$compiler->setVariables($variables);
	try {
		// great, no exceptions where thrown while creating the object
		$css = $compiler->compile($scssContents);
	} catch (\Exception $ex) {
		echo $ex->getMessage();
	}
	if (!empty($css) && is_string($css)) {
		file_put_contents($target_css, $css);
	}
}

function reset_scss_vars()
{
	include(dirname(__FILE__) . '/bat-reset-vars-defaults.php');
	$compiler = new ScssPhp\ScssPhp\Compiler();

	$source_scss = get_stylesheet_directory() . '/scss/main.scss';
	$scssContents = file_get_contents($source_scss);
	$import_path = get_stylesheet_directory() . '/scss';
	$compiler->addImportPath($import_path);
	$target_css = get_stylesheet_directory() . '/style.css';
	$compiler->setVariables($variables);

	$array_keys = array_keys($variables);
	foreach ($array_keys as $array_key) {
		bat_set_theme_option(str_replace("$", "", $array_key), '');
	}

	try {
		// great, no exceptions where thrown while creating the object
		$css = $compiler->compile($scssContents);
	} catch (\Exception $ex) {
		echo $ex->getMessage();
	}
	if (!empty($css) && is_string($css)) {
		file_put_contents($target_css, $css);
	}
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

	$key = 'reset-vars';

	// Remove specific parameter from query string
	$filteredURL = preg_replace('~(\?|&)' . $key . '=[^&]*~', '$1', $currentURL);
	header('location: ' . $filteredURL);
	exit;
}

if (isset($_GET['settings-updated']) && $_GET['settings-updated'] == 'true') {
	compile_scss();
}

if (isset($_GET['reset-vars']) && $_GET['reset-vars'] == 'true') {
	reset_scss_vars();
}
