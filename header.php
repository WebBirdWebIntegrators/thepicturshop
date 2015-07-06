<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Fonts -->	
	
	<!-- Google Analytics -->
	<?php get_template_part( 'assets/google-analytics' ) ?>	
	
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<?php get_template_part( 'templates/header' ) ?>