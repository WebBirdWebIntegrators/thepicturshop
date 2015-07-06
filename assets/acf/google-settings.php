<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_google_setting__';

acf_add_local_field_group(array (
	'key' => 'group_ts_google_settings',
	'title' => __('Google Settings','eagle'),
	'fields' => array (
		array (
			'key' => 'field_'. $name_path . 'google_site_verification_html_tag_id',
			'label' => 'Google Site Verification HTML Tag ID',
			'name' => $name_path . 'google_site_verification_html_tag_id',
			'type' => 'text',
			'instructions' => __('Enter your Google Site Verification HTML Tag ID.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . 'google_analytics_tracking_id',
			'label' => __('Google Analytics Tracking ID','eagle'),
			'name' => $name_path . 'google_analytics_tracking_id',
			'type' => 'text',
			'instructions' => __('Enter your Google Analytics Tracking ID.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . 'google_corporate_contacts_code',
			'label' => __('Corporate Contacts Code','eagle'),
			'name' => $name_path . 'google_corporate_contacts_code',
			'type' => 'textarea',
			'instructions' => __('Set your preferred settings','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '<script type="application/ld+json">
			{ "@context" : "http://schema.org",
			  "@type" : "Organization",
			  "name" : "",
			  "alternateName" : "",
			  "url" : "",
			  "logo":"",
			  "contactPoint" : [
			{ "@type" : "ContactPoint",
			  "telephone" : "",
			  "contactType" : "customer service",
			  "contactOption":"TollFree",
			  "areaServed":"BE",
			  "availableLanguage":"Dutch"
			} ] }
			</script>',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'google-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;


/*
* Hook the google setting fields into the wp_head action hook
*/

function wb_google_settings_wp_head() {
	
	if( get_field('ts_google_setting__google_site_verification_html_tag_id', 'option') ) :
		
		$ts_google_setting__google_site_verification_html_tag_id = get_field('ts_google_setting__google_site_verification_html_tag_id', 'option');
		
		echo '<!-- Google Site Verification HTML Tag ID -->';
		echo '<meta name="google-site-verification" content="' . $ts_google_setting__google_site_verification_html_tag_id . '" />';
	
	endif;
	
	
	if( is_front_page() ) :
	
		if( get_field('ts_google_setting__google_corporate_contacts_code', 'option') ) :
			
			echo '<!-- Google Corporate Contact Code -->';
			echo get_field('ts_google_setting__google_corporate_contacts_code', 'option');
		
		endif;
	
	endif;
	
}

add_action('wp_head','wb_google_settings_wp_head');

?>