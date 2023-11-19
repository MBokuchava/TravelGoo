<!-- 

Template name: Packages

 -->

<?php

$section_five = get_field('packeges_section');
$title = $section_five['title'];
$card_1 = $section_five['card_1'];
$card_2 = $section_five['card_2'];
$card_3 = $section_five['card_3'];
?>

<?php get_header(); ?>
<div class="main">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/background.jpg" ?>" alt="" class="log_in_img">
    <img src="<?php echo get_template_directory_uri() . "/assets/images/bg_blur.png" ?>" alt=""
        class="log_in_img log_in_img2">
    <section class="home_section all-in-bg about_us_section">
        <div class="container">
            <div class="imagination_section">
                <h1 class="main_title"><?php echo $title; ?></h1>
            </div>
        </div>
    </section>
    <section class="all-in-bg">
        <div class="container">
            <div class="package_section">
                <div class="container-for-cards-packages">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <?php $packege_card = $section_five['card_' . $i]; ?>
                    <div class="card-packages">
                        <div class="image-container-packages">
                            <img src="<?php echo esc_url($packege_card['card_image']); ?>" alt="img">
                        </div>
                        <div class="main-for-card-content-packages page_card-packages">
                            <div class="card-header-packages">
                                <h3 class="title-for-card-packages"><?php echo esc_html($packege_card['card_title']); ?>
                                </h3>
                                <h3 class="title-for-card-packages"><?php echo esc_html($packege_card['card_price']); ?>
                                </h3>
                            </div>
                            <div class="card-content-packages">
                                <p class="content-for-card-packages">
                                    <?php echo esc_html($packege_card['card_description']); ?>
                                </p>
                            </div>
                            <div class="card-footer-packages">
                                <div class="icon-for-card-packages">
                                    <img src="<?php echo esc_url($packege_card['card_location']); ?>" alt="img">
                                    <h4 class="country-for-card-packages">
                                        <?php echo esc_html($packege_card['country']); ?></h4>
                                </div>
                                <a target="_blank" href="#" id="know-more-for-card">
                                    <?php echo esc_html($packege_card['know_more']); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>