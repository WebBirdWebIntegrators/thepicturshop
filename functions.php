<?php
	
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
add_theme_support( "title-tag" );

function webbird_load_editor_style() {
  add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
}
//add_action( 'after_setup_theme', 'webbird_load_editor_style' );

add_action('after_setup_theme', 'webbird_theme_setup');

function webbird_theme_setup(){
    load_theme_textdomain( 'thepictureshop', get_template_directory() . '/languages' );
}

function load_exported_fields(){
	include 'assets/acf/acf.php';
}

add_action('init', 'load_exported_fields');


// Load WooCommerce Settings

include 'assets/woocommerce.php';

function wb_check_theme_plugin_dependencies() {
	
	if ( ! class_exists('acf') ) {
	
		$output = '<div id="message" class="error">';
			$output .= '<p>This theme requires the "Advanced Custom Fields Pro" plugin to be activated and/or installed.</p>';
		$output .= '</div>';
		
		echo $output;
	
	}
}

add_action('admin_init', 'wb_check_theme_plugin_dependencies');


function webbird_show_full_tinymce( $args ) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

add_filter( 'tiny_mce_before_init', 'webbird_show_full_tinymce' );

update_option('thumbnail_size_w', 300);
update_option('thumbnail_size_h', 300);
update_option('medium_size_w', 600);
update_option('medium_size_h', 600);
update_option('large_size_w', 1200);
update_option('large_size_h', 1200);

//add_image_size( 'medium-square', 600, 600, true );

function webbird_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
	    // 'medium-square' => __( 'Medium square', 'thepictureshop' ),
        'billboard-bp5' => __( 'Billboard', 'thepictureshop' ),
    ) );
}

add_filter( 'image_size_names_choose', 'webbird_custom_image_sizes' );

register_nav_menus( 
	array (
		'header-mnav' => 'Header - Main navigation',
		'header-fnav' => 'Header - Functional navigation',
		'footer-nav' => 'Footer - Navigation',
		'footer-copyrights' => 'Footer - Copyrights',
		'mnav' => 'Main navigation',
		'webshop' => 'Webshop',
		'printshop' => 'Printshop',
		'copyshop' => 'Copyshop',
		'balloonshop' => 'Balloonshop',
	)
);

if ( ! isset( $content_width ) ) $content_width = 600;

/*
function editor_style() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'editor_style' );
*/

function webbird_login_stylesheet() {
    wp_enqueue_style( 'custom-login' , get_template_directory_uri() . '/css/wordpress.css' );
}
add_action( 'login_enqueue_scripts' , 'webbird_login_stylesheet' );

function webbird_login_logo_url() {
    return 'http://www.webbird.be';
}
add_filter( 'login_headerurl' , 'webbird_login_logo_url' );

function webbird_login_logo_url_title() {
    return 'WebBird | Website & webshop architects';
}
add_filter( 'login_headertitle' , 'webbird_login_logo_url_title' );

add_action('wp_enqueue_scripts' , 'webbird_scripts');

function webbird_scripts() {
	wp_enqueue_script('jquery');
	
	wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'webbird-styles' );
		
	wp_register_style( 'fontawesome' , get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );
	
	wp_register_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script( 'flexslider' );
}

function wb_add_google_fonts() {
	
	echo "<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>";
	
}

add_action('wp_head','wb_add_google_fonts');

$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __('Theme Settings', 'thepictureshop'),
		'menu_title'	=> __('Theme Settings', 'thepictureshop'),
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-appearance',
		'position'		=> '90',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Contact Information Settings', 'thepictureshop'),
		'menu_title'	=> __('Contact Information', 'thepictureshop'),
		'slug'			=> 'contact-settings',
		'parent_slug'	=> 'theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Site Credits Settings', 'thepictureshop'),
		'menu_title'	=> __('Site Credits', 'thepictureshop'),
		'slug'			=> 'site-credits-settings',
		'parent_slug'	=> 'theme-settings',
	));
		
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Social Media Settings', 'thepictureshop'),
		'menu_title'	=> __('Social Media', 'thepictureshop'),
		'slug'			=> 'social-media-settings',
		'parent_slug'	=> 'theme-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __('Google Settings', 'thepictureshop'),
		'menu_title'	=> __('Google', 'thepictureshop'),
		'slug'			=> 'google-settings',
		'parent_slug'	=> 'theme-settings',
	));
}

// Allow user to login with email address

add_filter('authenticate', 'webbird_allow_email_login', 20, 3);

function webbird_allow_email_login( $user, $username, $password ) {
    if( is_email( $username ) ) {
        $user = get_user_by_email( $username );
        
        if( $user ) $username = $user->user_login;
    }
    return wp_authenticate_username_password( null, $username, $password );
}


// Add email login label to username input field

add_filter( 'gettext', 'webbird_add_email_to_login', 20, 3 );

function webbird_add_email_to_login( $translated_text, $text, $domain ) {
    if( 'Username' == $translated_text )
        $translated_text .= __( ' or Email' );
    return $translated_text;
}


// Move Yoast SEO meta box to the bottom

function webbird_move_yoast_seo_to_bottom() {
	return 'low';
}

add_filter( 'wpseo_metabox_prio', 'webbird_move_yoast_seo_to_bottom');


// Wrap video container around WordPress oembeds

function wb_oembed_video_container($html, $url, $attr, $post_id) {
  return '<div class="video-container">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'wb_oembed_video_container', 99, 4);


// Register default sidebar

if ( ! function_exists( 'wb_register_default_sidebar' ) ) {

function wb_register_default_sidebar() {

	$args = array(
		'id'            => 'sidebar1',
		'name'          => __( 'thepictureshop - Default Sidebar', 'thepictureshop' ),
		'description'   => __( 'Default sidebar used around most parts of the site', 'thepictureshop' ),
		'class'         => 'sidebar-default',
		'before_widget' => '<div class="sidebar-default %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'wb_register_default_sidebar' );
}

// Add excerpt to pages

function wb_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_action( 'init', 'wb_add_excerpts_to_pages' );