<?php
// Enqueue Parent Theme Styles (Hello Elementor is a parent theme, so no need to load separately)
function hello_elementor_child_enqueue_scripts() {
    // Load Parent Theme CSS (Hello Elementor)
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Load Child Theme CSS
    wp_enqueue_style('child-style', get_stylesheet_uri());

    // Load Your Custom JS
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/custom.js', array('jquery'), false, true);

    // Load External or Additional Stylesheets (Add your custom or third-party CSS files)
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('inner-css', get_stylesheet_directory_uri() . '/css/inner.css');
    wp_enqueue_style('owl-carousel-css', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/css/swiper.css');
    wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/css/style.css');

    // Load External or Additional JS Files (Add your custom or third-party JS files)
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('fonts-js', get_stylesheet_directory_uri() . '/js/fonts.js', array('jquery'), false, true);
    wp_enqueue_script('script-js', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts');

// Load jQuery (Hello Elementor uses its own version, but you can re-enable it here if needed)
function load_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');
