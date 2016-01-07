<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //do_action('before'); ?>
<div id="preloader" style="display: none;">
    <div id="loader">
        <div class="loader-inner line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div id="page-outer">


<header id="header" class="site-header">
    <div class="container-fluid">
        <div id="logo">
            <a href="/">
                <img src="<?= get_template_directory_uri() ?>/assets/img/logo.png" alt="KingMa">
                <img class="transparent-logo" src="assets/img/logo-transparent.png" alt="KingMa">
            </a>
        </div>
        <nav id="top-menu">
            <?php
            wp_nav_menu(array(
                'menu' => 'top-menu',
                'menu_class' => 'menu-items',
            ));
            ?>
            <div id="nav-trigger" class="nav-trigger">
                <div class="icon-bar"><span></span> <span></span> <span></span></div>
                <div class="text"><span>Menu</span> <span>Close</span></div>
            </div>
        </nav>

        <div id="top-social">
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>
    </div>
</header>
