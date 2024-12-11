<?php
/**
 * Template Name: Services
 */
?>

<?php
$register_fields = get_fields( get_the_ID() );
//var_dump( $register_fields);
?>

<?php get_header(); ?>

<?php softuni_display_teachers(); ?>

<?php softuni_display_reviews(); ?> 

<?php
	get_template_part( 'partials/contact', 'section', $register_fields);
?>

<?php get_footer(); ?>