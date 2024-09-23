<?php // Theme Switcha - Enqueue Resources

if (!defined('ABSPATH')) exit;

function theme_switcha_enqueue_resources_admin() {
	
	$screen_id = theme_switcha_get_current_screen_id();
	
	if ($screen_id === 'settings_page_theme_switcha_settings') {
		
		// wp_enqueue_style($handle, $src, $deps, $ver, $media)
		
		wp_enqueue_style('wp-jquery-ui-dialog');
		
		wp_enqueue_style('theme-switcha-font-icons', THEME_SWITCHA_URL .'css/font-icons.css', array(), THEME_SWITCHA_VERSION);
		
		wp_enqueue_style('theme-switcha-settings', THEME_SWITCHA_URL .'css/settings.css', array(), THEME_SWITCHA_VERSION);
		
		// wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)
		
		$js_deps = array('jquery', 'jquery-ui-core', 'jquery-ui-dialog');
		
		wp_enqueue_script('theme_switcha_settings', THEME_SWITCHA_URL .'js/settings.js', $js_deps, THEME_SWITCHA_VERSION);
		
		$data = theme_switcha_print_js_vars_admin();
		
		wp_localize_script('theme_switcha_settings', 'theme_switcha_settings', $data);
		
	}
	
}

function theme_switcha_print_js_vars_admin() {
	
	$data = array(
		'reset_title'   => __('Confirm Reset',            'theme-switcha'),
		'reset_message' => __('Restore default options?', 'theme-switcha'),
		'reset_true'    => __('Yes, make it so.',         'theme-switcha'),
		'reset_false'   => __('No, abort mission.',       'theme-switcha'),
	);
	
	return $data;
	
}

function theme_switcha_get_current_screen_id() {
	
	if (!function_exists('get_current_screen')) require_once ABSPATH .'/wp-admin/includes/screen.php';
	
	$screen = get_current_screen();
	
	if ($screen && property_exists($screen, 'id')) return $screen->id;
	
	return false;
	
}
