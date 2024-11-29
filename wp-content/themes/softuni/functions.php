<?php

add_theme_support ( 'post-thumbnails' );
add_theme_support ( 'title-tag' );
add_post_type_support( 'excerpt', array() );

function softuni_enqueue_assets() {
    
}


function softuni_display_courses( $number_of_posts=3 ){
    include 'courses.php'; 
}


/*
Adding one more extra class to th ebody
*/

function softuni_body_class ( $classes ) {
    $classes[] = 'softuni-test-class';
    return $classes;
  }

add_action ( 'body_class' ,'softuni_body_class' );

/**
 * This is the main function to register navigation menus
 *
 * @return void
 */
function softuni_register_nav_menus() {
    // register_nav_menus(
    // 	array(
    // 		'primary_menu'          => __( 'Primary Menu', 'textdomain' ),
    // 		'primary_menu_mobile'   => __( 'Primary Menu Mobile', 'textdomain' ),
    // 		'footer_menu_site_info' => __( 'Footer Menu Site Info', 'textdomain' ),
    // 	)
    // );
    register_nav_menu( 'primary', 'Primary Menu' );
  }
  
  add_action( 'after_setup_theme', 'softuni_register_nav_menus', 0 );
