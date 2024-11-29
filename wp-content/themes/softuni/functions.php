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