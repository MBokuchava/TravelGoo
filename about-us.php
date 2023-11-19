<!-- 

template name: About Us

 -->
<?php

$about_us = get_field('about_us');
$about_bg = $about_us['bg_image'];
$about_bg_filter = $about_us['bg_filter'];
$about_title = $about_us['title'];

$about_us_content = get_field('about_us_content');
$image1 = $about_us_content['first_image'];
$image2 = $about_us_content['second_image'];
$image3 = $about_us_content['third_image'];
$text1 = $about_us_content['text_area'];
$text2 = $about_us_content['text_area_2'];
$text3 = $about_us_content['text_area_3'];

?>


<?php get_header(); ?>


<main class="main">
    <!-- Guga -->
    <img src="<?php echo $about_bg; ?>" alt="BG" class="log_in_img">
    <img src="<?php echo $about_bg_filter; ?>" alt="BG" class="log_in_img log_in_img2">
    <section class="home_section all-in-bg about_us_section">
        <div class="container">
            <div class="imagination_section">
                <h1 class="main_title"><?php echo $about_title; ?></h1>
            </div>
        </div>
    </section>
    <section class="about_us_content all-in-bg">
        <div class="about_us_card">
            <img src="<?php echo $image1; ?>" alt="image">
            <p class="paragraph"><?php echo $text1; ?></p>
        </div>
        <div class="about_us_card">
            <img src="<?php echo $image2; ?>" alt="image">
            <p class="paragraph"><?php echo $text2; ?></p>
        </div>
        <div class="about_us_card">
            <img src="<?php echo $image3; ?>" alt="image">
            <p class="paragraph"><?php echo $text3; ?></p>
        </div>
    </section>

    <?php get_footer(); ?>