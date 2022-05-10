<?php
require_once get_theme_file_path( '/inc/tgm.php' );
require_once get_theme_file_path( '/lib/class-wp-bootstrap-navwalker.php' );
if(site_url() == "http://protheme.local.com/"){
    define("VERSION", time());
}else{
    define("VERSION", wp_get_theme() -> get("Version"));
}
function solartec_theme_setup(){
    load_theme_textdomain( "stack", get_theme_file_path( "/languages" ));
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails",array('post', 'slider') );
    add_theme_support( "custom-logo" );
    add_theme_support( 'html5', array( 'comment-list', 'search-form') );
    add_editor_style( "/assets/css/editor-style.css" );
    add_image_size( "stack-home-square", 400, 460, true );
    register_nav_menu( "topmenu", __("Top Menu", "stack") );
}
add_action( "after_setup_theme", "solartec_theme_setup" );

function solartec_assets() {

    wp_enqueue_style( "googleapis-css", '//fonts.googleapis.com');
    wp_enqueue_style( "gstatic-css", '//fonts.gstatic.com');
    wp_enqueue_style( "google-font-css", '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap');
    wp_enqueue_style( "font-awesome-css", '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style( "bootstrap-icons-css", '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style( "animate-css", get_theme_file_uri( "assets/lib/animate/animate.min.css" ), null, VERSION);
    wp_enqueue_style( "carousel-css", get_theme_file_uri( "assets/lib/owlcarousel/assets/owl.carousel.min.css" ), null, VERSION);
    wp_enqueue_style( "lightbox-css", get_theme_file_uri( "assets/lib/lightbox/css/lightbox.min.css" ), null, VERSION);
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "assets/css/bootstrap.min.css" ), null, VERSION);
    wp_enqueue_style( "fancybox-css", get_theme_file_uri( "assets/css/jquery.fancybox.css" ), null, VERSION);
    wp_enqueue_style( "style-css", get_theme_file_uri( "assets/css/style.css" ), null, VERSION);
    wp_enqueue_style( 'mamun-css', get_stylesheet_uri(),null, VERSION );

    wp_enqueue_script( 'bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array("jquery"), VERSION, true);
    wp_enqueue_script( 'wow-js', get_theme_file_uri("assets/lib/wow/wow.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'easing-js', get_theme_file_uri("assets/lib/easing/easing.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'waypoints-js', get_theme_file_uri("assets/lib/waypoints/waypoints.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'counterup-js', get_theme_file_uri("assets/lib/counterup/counterup.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'carousel-js', get_theme_file_uri("assets/lib/owlcarousel/owl.carousel.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'isotope-js', get_theme_file_uri("assets/lib/isotope/isotope.pkgd.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'lightbox-js', get_theme_file_uri("assets/lib/lightbox/js/lightbox.min.js"), array("jquery"), VERSION, true);
    wp_enqueue_script( 'main-js', get_theme_file_uri("assets/js/main.js"), array("jquery"), VERSION, true);
    }
add_action( 'wp_enqueue_scripts', 'solartec_assets' );