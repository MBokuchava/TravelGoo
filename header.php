<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SkillwillGroupWork
 */
?>
<!-- Guga  -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'skillwillgroupwork'); ?></a>
        <header id="masthead" class="site-header <?php echo is_user_logged_in() ? 'logged-in' : ''; ?>">
            <div class="container">
                <div id="header_section">
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div>
                    <nav id="site-navigation" class="main-navigation header_navigation">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'header-menu'
                            )
                        ); ?>
                    </nav><!-- #site-navigation -->
                    <div class="registration_content">
                        <div class="sign_content">
                            <a class="str1" href="https://groupworkskillwill.000webhostapp.com/contact-us/"><i class='bx bx-star star_icon'></i></a>
                            <a class="str2" href="https://groupworkskillwill.000webhostapp.com/contact-us/"><i class='bx bxs-star star_icon'></i></a>
                        </div>
                        <a href="https://groupworkskillwill.000webhostapp.com/log-in//"><i class='bx bx-user-circle user_icon'></i></a>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->