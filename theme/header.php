<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta name="format-detection" content="telephone=no">
    
    <link href="<?php echo get_bloginfo('template_directory'); ?>/icons/apple-touch-icon-57x57.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/icons/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon-precomposed">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/icons/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon-precomposed">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/icons/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon-precomposed">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/icons/favicon.ico" rel="shortcut icon">
    
    <?php wp_head(); ?>
    
    <title><?php bloginfo('title'); ?></title>
</head>
<body>
    <div class="page">
        <header class="page-header">
            <div class="container">
                
                <h2 class="logo">
                    <a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo.svg" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </h2>
                
                <a href="#" class="navicon">
                    <span class="navicon-bar"></span>
                    <span class="navicon-bar"></span>
                    <span class="navicon-bar"></span>
                </a>
                
                <nav class="page-nav">
	                <div class="container">
	                    <div class="menu-wrapper">
	                        <?php wp_nav_menu(array('menu'=> 'main-menu')); ?>
	                    </div>
	                </div>
	            </nav>
                
            </div>
        </header>