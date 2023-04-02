<?php
add_action( 'wp_enqueue_scripts', 'add_Scr_Sty');
add_theme_support( 'custom-logo' );

    function add_Scr_Sty () {
        wp_deregister_script('jquery');
        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js', false, null, true);
        wp_enqueue_script( 'jquery');  
        wp_enqueue_script( 'swiper-sc', get_template_directory_uri(). '/assets/js/swiper-bundle.esm.browser.min.js', false, null, true );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper-sc'), null, true);

        wp_enqueue_style( 'fontello', get_template_directory_uri() . '/assets/css/fontello.css');
        wp_enqueue_style( 'swiper-st', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
        wp_enqueue_style( 'main_style', get_stylesheet_uri(), array ('fontello', 'swiper-st'));
    }
?>