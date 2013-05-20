<!doctype html>
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
		
	<meta name="author" content="">
    <meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />			
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('title'); ?> RSS Feed" href="/feed/" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

    <script>

        fadeOnLoad = function(e){

            if($ !== undefined) $(e).animate({  opacity: 1 }, 1000);
        }
    </script>
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php body_class(); ?>>

    <div class="wrapper" id="header-wrapper">
        <header class="clearfix">
            <h1><a href="/"><?php bloginfo('title'); ?></a></h1>
        </header>
    </div><!-- /#header-wrapper -->

    <div class="wrapper" id="body-wrapper">
        <div class="container">
            <section class="s1">
                <?php get_sidebar(); ?>
            </section>
            <section class="s4">