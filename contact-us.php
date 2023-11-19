<!-- 

template name: Contact Us

 -->

<?php get_header(); ?>
<div class="main">
    <section class="contact_us_section all-in-bg">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/background.jpg" ?>" alt="" class="log_in_img">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/bg_blur.png" ?>" alt="" class="log_in_img log_in_img2">
        <div class="container">

            <div class="contact_form">
                <h2><?php echo get_the_title(); ?></h2>
                <div class="contact_form_content ">
                    <?php echo do_shortcode('[contact-form-7 id="b53dae8" title="Contact us"]'); ?>
                </div>
            </div>
        </div>

    </section>
</div>
<?php get_footer(); ?>