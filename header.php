<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-57x57.png';?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-60x60.png';?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-72x72.png';?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-76x76.png';?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-114x114.png';?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-120x120.png';?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-144x144.png';?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-152x152.png';?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo LASSO_THEME_URL.'/assets/img/apple-icon-180x180.png';?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo LASSO_THEME_URL.'/assets/img/android-icon-192x192.png';?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo LASSO_THEME_URL.'/assets/img/favicon-32x32.png';?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo LASSO_THEME_URL.'/assets/img/favicon-96x96.png';?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo LASSO_THEME_URL.'/assets/img/favicon-16x16.png';?>">
	<link href="<?php echo LASSO_THEME_URL.'/assets/img/favicon.ico';?>" rel="shortcut icon" type="image/x-icon">
	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> >

		<header>

			<?php get_template_part('content/mast'); ?>

		</header>