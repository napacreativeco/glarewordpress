<?php
if ( ! function_exists( 'throne_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function throne_theme_setup() {
	
	wp_enqueue_script("jquery");
	
    add_theme_support( 'post-thumbnails' );
	
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
    
}
endif;
add_action( 'init', 'throne_theme_setup' );


function throne_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/compiled/throne.css' );
}
add_action( 'wp_enqueue_scripts', 'throne_styles' );

/*======================================================
 * Disable WooCommerce Styles
 *======================================================*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/*======================================================
 * Trim Zeros on Prices
 *======================================================*/
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

/*======================================================
 * Custom Taxonomies
 *======================================================*/
// include get_template_directory() . '/inc/cpt--commissions.php';
// include get_template_directory() . '/inc/cpt--personal.php';
// include get_template_directory() . '/inc/cpt--film.php';
// include get_template_directory() . '/inc/cpt--books.php';
// include get_template_directory() . '/inc/cpt--travel.php';

/*======================================================
 * Customizer Settings
 *======================================================*/
//  include get_template_directory() . '/inc/cust--megamenu.php';
//  include get_template_directory() . '/inc/cust--bio.php';


