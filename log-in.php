<!-- 

Template Name: Log-In

 -->

<!-- Guga  -->

<?php get_header(); ?>
<div class="main">
    <section class="log_ing_section">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/background.jpg" ?>" alt="" class="log_in_img">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/bg_blur.png" ?>" alt="" class="log_in_img log_in_img2">
        <div class="login-box">
            <form action="">
                <h2>login</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" required>
                    <label> Email </label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input class="input_ps" type="password" required>
                    <label> Password </label>
                </div>
                <div class="remember-forgot">
                    <label> <input type="checkbox"> Remember Me! </label>
                    <a id="rem-for" href="#">Forgot Password?</a>
                </div>
                <button id="login_btn" type="Submit">login</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </section>
</div>
<?php get_footer(); ?>