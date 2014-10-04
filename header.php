<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
	

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

		<?php wp_head(); ?>
	</head>
	
	<body>
		<div class="wrap">

		<header>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
		</header>

		<div class="content">