<?php


/**
 * This is the assets function where we'll enqueue our scripts and styles
 *
 */
function softuni_plugin_enqueue_assets() {
	wp_enqueue_script(
        'ajax-script',
        plugins_url( '../assets/scripts/scripts.js', __FILE__ ),
        array(),
        1.0
    );
    wp_localize_script(
        'ajax-script',
        'my_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'wp_enqueue_scripts', 'softuni_plugin_enqueue_assets' );


/**
 * This is our dynamic function that handles the AJAX subscribe
 *
 * @return void
 */

function softuni_subject_subscribe() {
  
    $id = esc_attr( $_POST['subject_id'] );
    var_dump( $id );
    
    $subscribers_count = get_post_meta( $id, 'subscribers', true );
    if ( empty( $subscribers_count ) ) {
        $subscribers_count = 0;
    }
    update_post_meta( $id, 'subscribers', $subscribers_count + 1 );
    var_dump( $subscribers_count );
}
add_action( 'wp_ajax_nopriv_softuni_subject_subscribe', 'softuni_subject_subscribe' );
add_action( 'wp_ajax_softuni_subject_subscribe', 'softuni_subject_subscribe' );




/**  
* This is a callback function to display the subject title with shortcut
*
* @return void
*/


function display_subject_title( $atts ) {
    //return get_the_title( 47 ); 

    $atts = shortcode_atts( array(
        'id'         => 'id',
        'show_image' => 'show_image'
    ), $atts, 'bartag' );

    if ( ! empty( $atts['id'] ) ){
        $title = get_the_title( $atts['id'] );
    }
    if ( ! empty( $atts['show_image'] ) ) {
        $image = get_the_post_thumbnail_url( $atts['id'] );
    }
    $content = '<div class="shortcode-class">';

    if ( ! empty( $title) ) {
        $content .=$title;
        $content .= '</div>';
    }
    if ( ! empty( $image ) ) {
        $content .= '<div class="shortcode-image">';
        $content .= '<img src="'. $image .'">';
        $content .= '</div>';
    }
    
    //var_dump( $image);
    return $content; 
 
}

add_shortcode( 'display_subject_title', 'display_subject_title' );