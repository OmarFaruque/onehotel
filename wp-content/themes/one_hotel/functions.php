<?php
/*
* One Hotel functions
*/
// Add Theme Options panel file
// inquie style & script  

function one_script(){
	// All Style
	wp_enqueue_style( 'one_theme', get_stylesheet_uri() ); // Main Stylesheet
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' ); // Animate Stylesheet
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' ); // Bootstrap Stylesheet
	
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' ); // owl.carousel Stylesheet
	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.css' ); // owl.theme Stylesheet
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' ); // prettyPhoto Stylesheet
	wp_enqueue_style( 'smothness', get_template_directory_uri() . '/css/smoothness/jquery-ui-1.10.4.custom.min.css' ); // jquery ui smoothness Stylesheet
	wp_enqueue_style( 'rs-plugin', get_template_directory_uri() . '/rs-plugin/css/settings.css' ); // rs-plugin Stylesheet
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/css/theme.css' ); // theme css Stylesheet
	wp_enqueue_style( 'switch_style', get_template_directory_uri() . '/css/colors/turquoise.css' ); // turquoise css Stylesheet
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' ); // responsive css Stylesheet
	wp_enqueue_style( 'common_theme_css', get_template_directory_uri() . '/css/common.css' ); // common css Stylesheet
	wp_enqueue_style( 'font-openSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700' ); // opensence fonts css Stylesheet
	wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/custom.css' ); // custom-css

	//javaScript 
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', array(), '1.0.0', false); // Jquery
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.1', true); // Bootstrap jquery
	wp_enqueue_script( 'Bootstrap_hover', get_template_directory_uri() . '/js/bootstrap-hover-dropdown.min.js', array(), '1.0.2', true); // bootstrap hover dropdown
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.3', true); // owl.carousel dropdown
	wp_enqueue_script( 'jqyery-parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.0.4', true); // jQuery Paralex dropdown
	wp_enqueue_script( 'nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.js', array(), '1.0.5', true); // nicescroll dropdown
	wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '1.0.6', true); // prettyPhoto
	wp_enqueue_script( 'customJquery', get_template_directory_uri() . '/js/jquery-ui-1.10.4.custom.min.js', array(), '1.0.7', true); // custom.js
	wp_enqueue_script( 'jQueryStiky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.0.8', true ); // jqueryStyky
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '1.0.9', true); // waypoints
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.0.10', true); // isotope
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.gmap.min.js', array(), '1.0.11', true); // gmap

	
	wp_enqueue_script( 'switch', get_template_directory_uri() . '/js/switch.js', array(), '1.0.12', true); // switch
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.13', true); // customjs
}
add_action( 'wp_enqueue_scripts', 'one_script' );


// Registered sidebar 
function one_hotel_widgets_init() {

	
	register_sidebar( array(
		'name' => __( 'Header Widget Area', 'viewr' ),
		'id' => 'header-widget-area',
		'description' => __( 'The header widget area', 'viewr' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'viewr' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'viewr' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	) );

	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Left Footer Widget Area', 'viewr' ),
		'id' => 'left-footer-widget-area',
		'description' => __( 'The left footer widget area', 'viewr' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Center Footer Widget Area', 'viewr' ),
		'id' => 'center-footer-widget-area',
		'description' => __( 'The center footer widget area', 'viewr' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Right Footer Widget Area', 'viewr' ),
		'id' => 'right-footer-widget-area',
		'description' => __( 'The right footer widget area', 'viewr' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'one_hotel_widgets_init' );


 register_nav_menus( array(
 		'primary' => 'Top Primary Menu'
 	) );




require_once('ch_theme_option/admin-function.php');