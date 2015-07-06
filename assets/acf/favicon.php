<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_favicon';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Favicon','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__image',
			'label' => false,
			'name' => $name_path . '__image',
			'type' => 'image',
			'instructions' => __('Upload your Favicon','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'ico',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-settings',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;


/*
* Hook the favicon fields into the wp_head action hooks
*/

function wb_add_favicon_to_wp_head() {
	
	if( get_field('field_552f91819f538', 'option') ) {
		
		$output = '<!-- Favicon -->';
		$output .= '<link rel="shortcut icon" href="' . get_field('field_552f91819f538', 'option') .'" type="image/x-icon">';
		$output .= '<link rel="icon" href="' . get_field('field_552f91819f538', 'option') . '" type="image/x-icon">';
		echo $output;
	
	} else {
		
		$output = '<!-- Favicon -->';
		$output .= '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/img/favicon-webbird.ico" type="image/x-icon">';
		$output .= '<link rel="icon" href="' . get_template_directory_uri() . '/img/favicon-webbird.ico" type="image/x-icon">';
		echo $output;
	}
	
	if( get_field('ts_google_setting__google_site_verification_html_tag_id', 'option') ) :
		
		$ts_google_setting__google_site_verification_html_tag_id = get_field('ts_google_setting__google_site_verification_html_tag_id', 'option');
		
		echo '<!-- Google Site Verification HTML Tag ID -->';
		echo '<meta name="google-site-verification" content="' . $ts_google_setting__google_site_verification_html_tag_id . '" />';
	
	endif;
	
}

add_action('wp_head','wb_add_favicon_to_wp_head');
	
?>