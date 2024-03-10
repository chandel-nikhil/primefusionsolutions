<?php
function enqueue_parent_and_child_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

     // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.css');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');

    // Owl Carousel CSS
    wp_enqueue_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    // Font Awesome CSS
    wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');

    // Custom styles
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/style.css');

    // Responsive styles
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css');
    
}
add_action('wp_enqueue_scripts', 'enqueue_parent_and_child_styles');


function enqueue_custom_scripts() {
    // jQuery
    wp_enqueue_script('jquery');

    // Popper.js
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '', true);

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri()  . '/js/bootstrap.js', array('jquery'), '', true);

    // Owl Carousel JS
    wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '', true);

    // Custom JS
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri()  . '/js/custom.js', array(), '', true);

    // Google Map (assuming myMap is a function defined in custom.js)
    // Note: Ensure you handle the API key properly, this example doesn't include it
    // wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=myMap', array(), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_theme_support( 'menus' );
function register_my_menu() {
    register_nav_menu( 'new-menu', __( 'New Menu' ) );
}
add_action( 'init', 'register_my_menu' );

