<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php include (TEMPLATEPATH . '/files/favicon.php'); ?>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>
<body>

<header class="t-header">
	<?php get_template_part( 'template/menu', 'desk'); ?>
	<?php get_template_part( 'template/menu', 'movil'); ?>
	<?php get_template_part( 'template/menu', 'general'); ?>

</header>
