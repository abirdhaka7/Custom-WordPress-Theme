<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_2_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
   
	<!---/.Bootstrap css-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
	<!---/.font-awesome icon css-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome/css/font-awesome.min.css">
	<!---/.Google font css-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-2-wordpress' ); ?></a>

<!--HEADER
==============================================-->
<header class="site-header" role="banner">
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" dta-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo.png" alt="logo "></a>
                    </div><!--/.navbar-header-->

<?php

wp_nav_menu( array (

	'theme_location' => 'primary',
	'container' => 'nav',
	'container_class' => 'navbar-collapse collapse',
	'menu_class' => 'nav navbar-nav navbar-right'

));

?>
                
                </div><!---/.container-->
        </div> <!--/.navbar-->
    </div><!--/.navbar wrapper-->
</header>