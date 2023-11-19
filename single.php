<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SkillwillGroupWork
 */

get_header(); ?>

<main id="primary" class="site-main contact_main all-in-bg">
	<img src="<?php echo get_template_directory_uri() . "/assets/images/background.jpg" ?>" alt="" class="log_in_img">
	<img src="<?php echo get_template_directory_uri() . "/assets/images/bg_blur.png" ?>" alt="" class="log_in_img log_in_img2">
	<div class="single_container">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="contact_main">
			<?php echo the_content(); ?>
		</div>

	</div>
</main><!-- #main -->
<?php get_footer();
