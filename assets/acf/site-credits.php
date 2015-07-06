<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_site_credits';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Site Credits', 'eagle' ),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__label',
			'label' => __('Label','eagle'),
			'name' => $name_path . '__label',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => __('Website by','eagle'),
			'append' => ':',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__site_url',
			'label' => __('URL',''),
			'name' => $name_path . '__site_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'http://',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'site-credits-settings',
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

?>