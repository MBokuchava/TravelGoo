<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SkillwillGroupWork
 */

?>
<!-- Guga  -->



<footer id="colophon" class="site-footer footer_section all-in-bg">
    <div class="container">
        <div class="footer_section_content" id="Email_taker">
            <form class="email_form" action="#Email_taker" method="post">
                <img class="card_img" src="<?php echo get_template_directory_uri() . "/assets/images/footer_bg.png" ?>" alt="footer_bg">
                <div class="form_content">
                    <h2 class="form_title">
                        Subscribe to get information, latest news and other
                        interesting offers about Cobham
                    </h2>
                    <div class="form_input">
                        <input type="email" id="email" name="email" placeholder="Your email">
                        <span><img src="<?php echo get_template_directory_uri() . "/assets/images/email.png" ?>" alt="email"></span>
                        <button class="normal" type="submit">Subscribe</button>
                    </div>
                </div>
                <h2 class="content_title"> <?php
                                            if (isset($_POST['email'])) {
                                                $mail = $_POST['email'];
                                                if ($mail == false) {
                                                    echo 'Subscribe to our newsletter';
                                                } else {
                                                    echo 'Thank you for your Subscription';
                                                }
                                            }
                                            ?> </h2>
                <img class="footer_img" src="<?php echo get_template_directory_uri() . "/assets/images/footer_bg2.png" ?>" alt="">
                <img class="footer_img2" src="<?php echo get_template_directory_uri() . "/assets/images/footer_bg3.png" ?>" alt="">
            </form>
            <div class="footer_menu_content">
                <div class="footer_logo">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/footerlogo.png" ?>" alt="logo">
                    <p class="paragraph">Book your trip in minute, get full
                        <br>Control for much longer.
                    </p>
                </div>
                <div class="footer_menu_nav">
                    <h4 class="footer_nav_title">Company</h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'primary-menu-2',
                            'menu_class'     => 'header-menu'
                        )
                    );
                    ?>
                </div>
                <div class="footer_menu_nav">
                    <h4 class="footer_nav_title">Contact</h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-3',
                            'menu_id'        => 'primary-menu-3',
                            'menu_class'     => 'header-menu'
                        )
                    );
                    ?>
                </div>
                <div class="footer_menu_nav">
                    <h4 class="footer_nav_title">More</h4>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-4',
                            'menu_id'        => 'primary-menu-4',
                            'menu_class'     => 'header-menu'
                        )
                    );
                    ?>
                </div>
                <div class="social_links">
                    <div class="icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                    </div>
                    <h3>Discovery our app</h3>
                    <div class="play_section">
                        <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/Googleplay.png" ?>" alt=""></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/PlayStore.png" ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <h3>All rights reserved@travelgoo.co</h3>
            </div>
        </div>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>