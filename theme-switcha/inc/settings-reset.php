<?php // Theme Switcha - Reset Settings

if (!defined('ABSPATH')) exit;

function theme_switcha_admin_notice() {
	
	$screen_id = theme_switcha_get_current_screen_id();
	
	if ($screen_id === 'settings_page_theme_switcha_settings') {
		
		if (isset($_GET['reset-options'])) {
			
			if ($_GET['reset-options'] === 'true') : ?>
				
				<div class="notice notice-success is-dismissible"><p><strong><?php esc_html_e('Default options restored.', 'theme-switcha'); ?></strong></p></div>
				
			<?php else : ?>
				
				<div class="notice notice-info is-dismissible"><p><strong><?php esc_html_e('No changes made to options.', 'theme-switcha'); ?></strong></p></div>
				
			<?php endif;
			
		}
		
		if (!theme_switcha_check_date_expired() && !theme_switcha_dismiss_notice_check()) {
			
			?>
			
			<div class="notice notice-success notice-margin">
				<p>
					<strong><?php esc_html_e('Fall Sale!', 'theme-switcha'); ?></strong> 
					<?php esc_html_e('Take 25% OFF any of our', 'theme-switcha'); ?> 
					<a target="_blank" rel="noopener noreferrer" href="https://plugin-planet.com/"><?php esc_html_e('Pro WordPress plugins', 'theme-switcha'); ?></a> 
					<?php esc_html_e('and', 'theme-switcha'); ?> 
					<a target="_blank" rel="noopener noreferrer" href="https://books.perishablepress.com/"><?php esc_html_e('books', 'theme-switcha'); ?></a>. 
					<?php esc_html_e('Apply code', 'theme-switcha'); ?> <code>FALL2024</code> <?php esc_html_e('at checkout. Sale ends 12/21/24.', 'theme-switcha'); ?> 
					<?php echo theme_switcha_dismiss_notice_link(); ?>
				</p>
			</div>
			
			<?php
			
		}
		
	}
	
}

//

function theme_switcha_dismiss_notice_activate() {
	
	delete_option('theme-switcha-dismiss-notice');
	
}

function theme_switcha_dismiss_notice_version() {
	
	$version_current = THEME_SWITCHA_VERSION;
	
	$version_previous = get_option('theme-switcha-dismiss-notice');
	
	$version_previous = ($version_previous) ? $version_previous : $version_current;
	
	if (version_compare($version_current, $version_previous, '>')) {
		
		delete_option('theme-switcha-dismiss-notice');
		
	}
	
}

function theme_switcha_dismiss_notice_check() {
	
	$check = get_option('theme-switcha-dismiss-notice');
	
	return ($check) ? true : false;
	
}

function theme_switcha_dismiss_notice_save() {
	
	if (isset($_GET['dismiss-notice-verify']) && wp_verify_nonce($_GET['dismiss-notice-verify'], 'theme_switcha_dismiss_notice')) {
		
		if (!current_user_can('manage_options')) exit;
		
		$result = update_option('theme-switcha-dismiss-notice', THEME_SWITCHA_VERSION, false);
		
		$result = $result ? 'true' : 'false';
		
		$location = admin_url('options-general.php?page=theme_switcha_settings&dismiss-notice='. $result);
		
		wp_redirect($location);
		
		exit;
		
	}
	
}

function theme_switcha_dismiss_notice_link() {
	
	$nonce = wp_create_nonce('theme_switcha_dismiss_notice');
	
	$href  = add_query_arg(array('dismiss-notice-verify' => $nonce), admin_url('options-general.php?page=theme_switcha_settings'));
	
	$label = esc_html__('Dismiss', 'theme-switcha');
	
	return '<a class="theme-switcha-dismiss-notice" href="'. esc_url($href) .'">'. esc_html($label) .'</a>';
	
}

function theme_switcha_check_date_expired() {
	
	$expires = apply_filters('theme_switcha_check_date_expired', '2024-12-21');
	
	return (new DateTime() > new DateTime($expires)) ? true : false;
	
}

//

function theme_switcha_reset_options() { 
	
	if (isset($_GET['reset-options-verify']) && wp_verify_nonce($_GET['reset-options-verify'], 'theme_switcha_reset_options')) {
		
		if (!current_user_can('manage_options')) exit;
		
		$options_default = Theme_Switcha::options();
		$options_update = update_option('theme_switcha_options', $options_default);
		
		$result = 'false';
		if ($options_update) $result = 'true';
		
		$location = admin_url('options-general.php?page=theme_switcha_settings&reset-options='. $result);
		wp_redirect($location);
		exit;
		
	}
	
}
