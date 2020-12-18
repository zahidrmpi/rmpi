<?php

function rmpi_bootstrapping(){
    load_theme_textdomain("rmpi");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu("topmenu",__("Top Menu","rmpi"));
}
add_action("after_setup_theme","rmpi_bootstrapping");
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function rmpi_theme_files() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.1', 'all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '//fonts.maateen.me/kalpurush/font.css', array(), '1.1', 'all');

    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 3.3, true);
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'proper-min-js', get_template_directory_uri() . '/assets/js/proper.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);

  }
  add_action( 'wp_enqueue_scripts', 'rmpi_theme_files' );