<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header class="header" role="banner">
            <div class="container header--container">
                <div class="header--container--branding">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <div class="open-menu-mobile">
                    <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
                </div>
                <div class="header--container--menu-items">
                    <?php custom_header_menu(); ?>
    
                    <button onclick="closeMenu()" class="bg-close-menu-mobile">
                        Fechar menu
                    </button>
                </div>
            </div>
        </header>       
            <main id="content" role="main">