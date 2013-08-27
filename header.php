<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<!-- load personal style -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/github.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style1.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/icons/style.css"/>


<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
</head>

<body <?php body_class(); ?>>
	<?php define( 'miPATH', get_template_directory_uri()."/"); ?>
<div id="page" class="hfeed radius">

	<header id="branding" class="colorhead radius" role="banner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/" id="logo"><img class="left" src="<?php echo get_template_directory_uri(); ?>/img/puzzle.png"></a>
			<hgroup class="left">
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<section id="social" class="right grande">
				<a href="https://github.com/CallePuzzleOrg" data-icon="&#xe003;"></a>
				<a href="https://twitter.com/callepuzzle" data-icon="&#xe006;"></a>
				<a href="http://facebook.com/callepuzzle" data-icon="&#xe009;"></a>
				<a href="<?php bloginfo('rss2_url'); ?>" data-icon="&#xe007;"></a>
			</section>

			<nav id="cd-dropdown-mio" class="left menu cd-dropdown">
				<a id="cd-dropdown-a"><span data-icon="&#xe001;"> </span>Menú</a>
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span data-icon="&#xe000;"> </span>Inicio</a></li>
					<?php
				$array = array('1' => 'labs', '2' => 'proyectos', '3' => 'anotaciones');
				$icons = array('1' => '&#xe00b;', '2' => '&#xe005;', '3' => '&#xe004;');
				listcategory($array,'',$icons);
					?>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</nav>

	</header><!-- #branding -->


	<div id="main">
