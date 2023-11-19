jQuery(document).ready(function ($) {
    // Initialize variables
    var slideIndex = 1;
    showSlide(slideIndex);

    // Next/previous controls
    $(".next").on("click", function () {
        showSlide(slideIndex += 1);
    });

    $(".prev").on("click", function () {
        showSlide(slideIndex -= 1);
    });

    function showSlide(n) {
        var slides = $(".carousel_card");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        slides.hide();
        slides.eq(slideIndex - 1).show();
    }
});