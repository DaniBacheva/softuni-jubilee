<?php
/**
 * Template Name: Homepage
 */
?>

<?php
$about_us_fields = get_fields( get_the_ID() );
//var_dump( $about_us_fields);
?>


<?php get_header(); ?>

<?php
	get_template_part( 'partials/about', 'section', $about_us_fields );
?>

<?php softuni_display_subjects( 4 ); ?> 


<?php softuni_display_courses( 4 ); ?> 


<?php softuni_display_reviews(); ?>


<?php softuni_display_teachers(); ?>


<?php
	get_template_part( 'partials/points', 'section' );
?>

<?php get_footer(); ?>