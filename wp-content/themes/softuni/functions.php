<?php

add_theme_support ( 'post-thumbnails' );
add_theme_support ( 'title-tag' );
add_post_type_support( 'excerpt', array() );

function softuni_enqueue_assets() {
    
}


function softuni_display_courses( $number_of_posts=3 ){
    include 'courses.php'; 
  }