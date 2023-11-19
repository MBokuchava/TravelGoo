<?php get_header(); ?>

<?php
$main_section = get_field('home_section_1');
$bg_image = $main_section['bg_image'];
$bg_filter_image = $main_section['bg_filter_image'];
$main_title = $main_section['main_title'];
$main_paragraph = $main_section['paragraph'];
$main_btn_title = $main_section['button_title'];

$section_second_our_servise = get_field('section_second_our_servise');
$title_for_our_servise = $section_second_our_servise['title_for_our_servise'];
$our_servises = $section_second_our_servise['our_servises'];

$section_three_best_service = get_field('section_three_best_service');
$service_cards = $section_three_best_service['service_cards'];
$service_title = $section_three_best_service['service_title'];
$service_description = $section_three_best_service['service_description'];

$args = array(
    'post_type' => 'destination',
    'posts_per_page' => -1
);
$posts = get_posts($args);
$destination = get_field('destination_section');
$dest_title = $destination['title'];

$section_five = get_field('packeges_section');
$for_buttons_links = $section_five['for_buttons_link'];
$title = $section_five['title'];
$card_1 = $section_five['card_1'];
$card_2 = $section_five['card_2'];
$card_3 = $section_five['card_3'];
$page_link = $section_five['page_link'];

$trip_section = get_field('trip_section');
$trip_title = $trip_section['main_title'];
$card_1 = $trip_section['card_1'];
$card_2 = $trip_section['card_2'];
$card_3 = $trip_section['card_3'];
$single_card = $trip_section['single_card'];
$single_card_mini = $trip_section['single_card_mini'];

$about_section = get_field('about_section');
$about_title = $about_section['title'];
$about_card_1 = $about_section['card_1'];
$about_card_2 = $about_section['card_2'];
$about_card_3 = $about_section['card_3'];

?>

<main class="main">
    <!-- Guga -->

    <section class="home_section all-in-bg">
        <img src="<?php echo $bg_image; ?>" alt="" class="log_in_img">
        <img src="<?php echo $bg_filter_image; ?>" alt="" class="log_in_img log_in_img2">
        <div class="container ">
            <div class="imagination_section all-in-bg">
                <h1 class="main_title"><?php echo $main_title; ?></h1>
                <h4 class="paragraph"><?php echo $main_paragraph; ?></h4>
                <a href="#about_section"><button class="normal"><?php echo $main_btn_title; ?></button></a>
            </div>
        </div>
    </section>
    
    <!-- section second dato -->
    <section class="section-second-our-service all-in-bg">
        <div class="container">
            <div class="our-service">
                <h2 class="title-for-our-service"><?php echo $title_for_our_servise ?></h2>
                <div class="services-conteiner">
                    <?php foreach ($our_servises as $our_servise => $id) : ?>
                    <a class="card-link-our-servis" href="<?php echo get_the_permalink($id); ?>">
                        <div class="service-card <?php echo $our_servise == 0 ? 'add-card-class' : 'service-card'; ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="" class="vector">
                            <div class="service-content">
                                <h3 class="service-title">
                                    <?php echo get_the_title($id); ?>
                                </h3>
                                <p class="service-description">
                                    <?php echo get_the_excerpt($id); ?>
                                </p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- sectio three dato -->
    <section class="section-three-servise all-in-bg">
        <div class="background-image-container">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/worldmap.png' ?>" alt="">
        </div>
        <div class="container conteiner-section-three">
            <div class="servise-content-for-section-three">
                <h1 class="sevise-title-for-section-three">
                    <?php echo $service_title ?>
                </h1>
                <p class="servise-description-for-section-three">
                    <?php echo $service_description ?>
                </p>
            </div>
            <div class="conteiner-for-cards-for-section-three">
                <?php foreach ($service_cards as $card_key => $card_id) : ?>
                <?php $icon = $card_id['icon'];
                    $card_reviews = $card_id['card_reviews'];
                    $card_reviews_description = $card_id['card_reviews_description'];

                    if (is_array($icon)) {
                        $icon_url = $icon['url'];
                    } else {
                        $icon_url = wp_get_attachment_image_url($icon, 'full');
                    }
                    ?>
                <a class="card-link-our-servis" href="<?php echo get_the_permalink($id); ?>">
                    <div class="card-for-section-three">
                        <img src="<?php echo esc_url($icon_url); ?>" alt="icon">

                        <h1 class="card-reviews"><?php echo  $card_reviews ?></h1>
                        <p class="card-reviews-description">
                        <p class="card-reviews-description"><?php echo  $card_reviews_description ?></p>
                        </p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
     <!-- Guga -->
    <section class="destination_section all-in-bg">
        <div class="container">
            <h2 class="content_title">Our Popular Destinations</h2>
            <div class="destination_section_content">
                <img class="destination_image"
                    src="<?php echo get_template_directory_uri() . "/assets/images/distBG.png" ?>" alt="">
                <div class="destination_cards">
                    <?php foreach ($posts as $post) : ?>
                    <div class="dest_card">
                        <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="">
                        <div class="card_titles">
                            <h3><?php echo $post->post_title; ?></h3>
                            <h4><?php echo $post->post_excerpt; ?>
                        </div>
                        </h4>
                        <a href="<?php echo get_permalink($post->ID); ?>"><i class='bx bx-chevron-right'></i></a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="loc loc1"></div>
                <div class="loc loc2"></div>
                <div class="loc loc3"></div>
            </div>
        </div>
    </section>
    
    <section class="section-five all-in-bg">
        <div class="container">
            <div class="package_section">
                <h2 class="title-for-our-service  Packages"><?php echo $title; ?></h2>
                <div class="for-buttons-links">
                    <?php $counter = 0; ?>
                    <?php foreach ($for_buttons_links as $button_item) : ?>
                        <?php $is_first = ($counter === 0);   ?>
                        <a class="first_btn <?php echo  $is_first ? 'second_btn' : 'first_btn '; ?>" target="_blank" href="<?php echo $button_item['url'] ?>">
                            <?php echo  $button_item['title']  ?>
                        </a>
                        <?php $counter++; ?>
                    <?php endforeach; ?>
                </div>
                <div class="container-for-cards-packages">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php $packege_card = $section_five['card_' . $i]; ?>
                        <div class="card-packages">
                            <div class="image-container-packages">
                                <img src="<?php echo esc_url($packege_card['card_image']); ?>" alt="img">
                            </div>
                            <div class="main-for-card-content-packages">
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
                <div class="for-main-button-sectionfive">
                    <a href="<?php echo $page_link; ?>" class="normal">Discover More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="trip_section all-in-bg">
        <div class="container">
            <h2 class="content_title"><?php echo $trip_title['title']; ?></h2>
            <p class="trip_main_paragraph"><?php echo $trip_title['subtitle']; ?></p>
            <div class="trip_grid_contentn">
                <div class="trip_grid_cards">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <?php $trip_card = $trip_section['card_' . $i]; ?>
                    <div class="trip_grid_card">
                        <img src="<?php echo esc_url($trip_card['image']); ?>" alt="">
                        <div class="trip_grid_des">
                            <h4><?php echo esc_html($trip_card['title']); ?></h4>
                            <p class="paragraph"><?php echo esc_html($trip_card['paragraph']); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="simple_card_section">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/blur.png" ?>" alt=""
                        class="blur_img">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/blur.png" ?>" alt=""
                        class="blur_img2">
                    <div class="simple_card">
                        <img class="simple_card_img" src="<?php echo $single_card['image']; ?>" alt="">
                        <h2 class="simple_card_title"><?php echo $single_card['title']; ?></h2>
                        <div class="trip_par">
                            <p class="trip_paragraph"><?php echo $single_card['date']; ?></p>
                            <p class="trip_paragraph"><?php echo $single_card['date_2']; ?></p>
                        </div>
                        <div class="simple_links">
                            <a href="#"><img src="<?php echo $single_card['image_1']; ?>" alt=""></a>
                            <a href="#"><img src="<?php echo $single_card['image_2']; ?>" alt=""></a>
                            <a href="#"><img src="<?php echo $single_card['image_3']; ?>" alt=""></a>
                        </div>
                        <div class="simple_rate">
                            <p class="trip_paragraph"><img src="<?php echo $single_card['image_4']; ?>" alt="">
                                <?php echo $single_card['last_text']; ?></p>
                            <span><i class='bx bx-heart'></i></span>
                        </div>
                    </div>
                    <div class="absolute_card">
                        <div class="absolute_card_img">
                            <img src="<?php echo $single_card_mini['image']; ?>" alt="">
                            <div class="absolute_card_des">
                                <p class="trip_paragraph"><?php echo $single_card_mini['title']; ?></p>
                                <h2 class="simple_card_title"><?php echo $single_card_mini['title_2']; ?></h2>
                            </div>
                        </div>
                        <h2 class="absolute_title">
                            <span><?php echo $single_card_mini['span']; ?></span><?php echo $single_card_mini['after_span']; ?>
                        </h2>
                        <img class="rate_img"
                            src="<?php echo get_template_directory_uri() . "/assets/images/rate.png" ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guga -->
    <section class="about_section all-in-bg" id="about_section">
        <div class="about_section_content">
            <h2 class="content_title"><?php echo $about_title; ?></h2>
            <div class="carousel_container">
                <div class="slider">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <?php
                        $card = $about_section['card_' . $i];
                        ?>
                    <div class="carousel_card">
                        <img class="left-card" src="<?php echo esc_url($card['left_image']); ?>" alt="">
                        <img class="card_img" src="<?php echo esc_url($card['card_image']); ?>" alt="card">
                        <div class="card_des">
                            <img src="<?php echo esc_url($card['user_image']); ?>" alt="user">
                            <p class="paragraph"><?php echo esc_html($card['description']); ?></p>
                            <a href="https://groupworkskillwill.000webhostapp.com/about-us/">  <?php echo esc_html($card['name']); ?></a>
                        </div>
                        <img class="right-card" src="<?php echo esc_url($card['right_image']); ?>" alt="">
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="buttons">
                    <button class="carousel-control prev"><i class='bx bx-chevron-left'></i></button>
                    <button class="carousel-control next"><i class='bx bx-chevron-right'></i></button>
                </div>
            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>